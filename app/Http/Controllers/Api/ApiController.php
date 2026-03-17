<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Edition;
use App\Models\Song;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $editions = Edition::orderBy('year', 'desc')->paginate(6);

        return response()->json($editions);
    }

    public function showEdition(Edition $edition)
    {
        $edition->load(['songs.artists', 'songs.awards']);

        return response()->json([
            "success" => true,
            "data" => $edition,
        ]);
    }
    public function showArtist(Artist $artist)
    {
        $artist->load(['songs.edition']);

        return response()->json([
            "success" => true,
            "data" => $artist,
        ]);
    }

    public function showSong(Song $song)
    {
        $song->load(['artists', 'awards', 'edition']);

        return response()->json([
            "success" => true,
            "data" => $song,
        ]);
    }

    public function showSongs()
    {
        $songs = Song::with(['artists'])->get();

        return response()->json([
            "success" => true,
            "data" => $songs,
        ]);
    }
}
