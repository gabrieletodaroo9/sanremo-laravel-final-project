<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Award;
use App\Models\Edition;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editions = Edition::has('songs')->orderBy('year', 'desc')->get();
        return view('admin.songs.index', compact('editions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $awards = Award::all();
        $editions = Edition::orderBy('year', 'desc')->get();
        $artists = Artist::orderBy('name')->get();
        return view('admin.songs.create', compact('editions', 'artists', 'awards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newSong = new Song();

        $newSong->title = $data["title"];
        $newSong->edition_id = $data["edition_id"];
        $newSong->position = $data["position"] ?? null;
        $newSong->lyrics = $data["lyrics"];
        $newSong->collaborators = $data['collaborators'] ?? null;

        $newSong->save();

        if (array_key_exists("artists", $data)) {
            $newSong->artists()->attach($data["artists"]);
        }
        if (array_key_exists("awards", $data)) {
            $newSong->awards()->attach($data["awards"]);
        }

        return redirect()->route('admin.songs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $song->load(['edition', 'artists', 'awards']);

        return view('admin.songs.show', compact('song'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        $awards = Award::all();
        $editions = Edition::orderBy('year', 'desc')->get();
        $artists = Artist::orderBy('name')->get();

        $song->load('artists');

        return view('admin.songs.edit', compact('song', 'editions', 'artists', 'awards'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Song $song)
    {
        $data = $request->all();

        $song->title = $data["title"];
        $song->edition_id = $data["edition_id"];
        $song->position = $data["position"] ?? null;
        $song->lyrics = $data["lyrics"];
        $song->collaborators = $data['collaborators'] ?? null;

        $song->save();

        $song->artists()->sync($data["artists"] ?? []);
        $song->awards()->sync($data["awards"] ?? []);

        return redirect()->route('admin.songs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->artists()->detach();

        $song->delete();

        return redirect()->route('admin.songs.index');
    }
}
