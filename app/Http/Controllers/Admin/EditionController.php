<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Edition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $editions = Edition::orderBy('year', 'desc')->get();

        return view('admin.editions.index', compact('editions'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.editions.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $data = $request->all();

        $newEdition = new Edition();

        $newEdition->year = $data["year"];
        $newEdition->host = $data["host"];
        $newEdition->location = $data["location"];
        $newEdition->co_hosts = $data["co_hosts"];

        if ($request->hasFile("logo_url")) {
            $logo_url = Storage::putFile("editions/logos", $data["logo_url"]);
            $newEdition->logo_url = $logo_url;
        }

        $newEdition->save();

        return redirect()->route('admin.editions.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(Edition $edition)
    {
        $edition->load('songs.artists');

        return view('admin.editions.show', compact('edition'));
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Edition $edition)
    {
        return view('admin.editions.edit', compact('edition'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Edition $edition)
    {
        $data = $request->all();

        $edition->year = $data["year"];
        $edition->host = $data["host"];
        $edition->location = $data["location"];
        $edition->co_hosts = $data["co_hosts"];

        if (array_key_exists("logo_url", $data)) {
            if ($edition->logo_url) {
                Storage::delete($edition->logo_url);
            }
            $logo_url = Storage::putFile("editions/logos", $data["logo_url"]);
            $edition->logo_url = $logo_url;
        }

        $edition->update();

        return redirect()->route('admin.editions.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Edition $edition)
    {
        if ($edition->logo_url) {
            Storage::delete($edition->logo_url);
        }
        $edition->delete();

        return redirect()->route('admin.editions.index');
    }
}
