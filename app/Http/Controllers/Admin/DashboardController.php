<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Award;
use App\Models\Edition;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
{
    $songsCount = Song::count();
    $artistsCount = Artist::count();
    $awardsCount = Award::count();
    $editionsCount = Edition::count();
    $latestSongs = Song::orderBy('created_at', 'desc')->take(5)->get();

    $searchResultsSongs = null;
    $searchResultsArtists = null;
    if ($request->has('search_song')) {
        $searchResultsSongs = Song::where('title', 'LIKE', "%{$request->search_song}%")->get();
    }
    if ($request->has('search_artist')) {
        $searchResultsArtists = Artist::where('name', 'LIKE', "%{$request->search_artist}%")->get();
    }

    return view('admin.dashboard', compact('songsCount', 'artistsCount', 'awardsCount', 'editionsCount', 'latestSongs','searchResultsSongs', 'searchResultsArtists'));
}

    public function profile()
    {
        $user = Auth::user();
        return view("admin.profile", compact("user"));
    }
}
