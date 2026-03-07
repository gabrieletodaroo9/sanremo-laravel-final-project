<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Edition;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $editions = Edition::orderBy('year', 'desc')->get();
        
        return response()->json([
            "success" => true,
            "data" => $editions,
        ]);
    }

    public function showEdition($id)
    {
        $edition = Edition::with(['songs.artists', 'songs.awards'])->find($id);

        return response()->json([
            "success" => true,
            "data" => $edition,
        ]);
    }

    public function showArtist($id)
    {
        $artist = Artist::with(['songs.edition'])->find($id);

        return response()->json([
            "success" => true,
            "data" => $artist,
        ]);
    }
}
