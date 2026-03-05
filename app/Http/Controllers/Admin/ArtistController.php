<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::orderBy('name')->get();
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newArtist = new Artist();
        $newArtist->name = $data["name"];
        $newArtist->type = $data["type"];
        $newArtist->bio = $data["bio"] ?? null;

        if ($request->hasFile("img_url")) {
            $img_url = Storage::putFile("artists/images", $data["img_url"]);
            $newArtist->img_url = $img_url;
        }
        $newArtist->save();

        return redirect()->route('admin.artists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $data = $request->all();

        $artist->name = $data["name"];
        $artist->type = $data["type"];
        $artist->bio = $data["bio"];

        if ($request->hasFile("img_url")) {
            if ($artist->img_url) {
                Storage::delete($artist->img_url);
            }
            $img_url = Storage::putFile("artists/images", $data["img_url"]);
            $artist->img_url = $img_url;
        }

        $artist->save();

        return redirect()->route('admin.artists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        if ($artist->img_url) {
            Storage::delete($artist->img_url);
        }
        $artist->delete();
        return redirect()->route('admin.artists.index');
    }
}
