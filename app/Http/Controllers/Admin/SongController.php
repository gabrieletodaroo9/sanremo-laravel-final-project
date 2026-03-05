<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
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
        $artists = Artist::has('songs')->with('songs.edition')->orderBy('name')->get();
        return view('admin.songs.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editions = Edition::orderBy('year', 'desc')->get();
        $artists = Artist::orderBy('name')->get();
        return view('admin.songs.create', compact('editions', 'artists'));
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
        $newSong->lyrics = $data["lyrics"];

        $newSong->save();

        if (array_key_exists("artists", $data)) {
            $newSong->artists()->attach($data["artists"]);
        }

        return redirect()->route('admin.songs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $song->load(['edition', 'artists']);

        return view('admin.songs.show', compact('song'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        $editions = Edition::orderBy('year', 'desc')->get();
        $artists = Artist::orderBy('name')->get();

        $song->load('artists');

        return view('admin.songs.edit', compact('song', 'editions', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Song $song)
    {
        $data = $request->all();

        $song->title = $data["title"];
        $song->edition_id = $data["edition_id"];
        $song->lyrics = $data["lyrics"];

        $song->save();

        if (array_key_exists("artists", $data)) {
            $song->artists()->sync($data["artists"]);
        } else {
            $song->artists()->sync([]);
        }

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
