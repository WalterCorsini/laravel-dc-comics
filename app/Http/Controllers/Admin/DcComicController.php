<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DcComic;

class DcComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dcComicsList = DcComic::all();
        // dd($dcComicsList);
        return view('dccomics.index', compact('dcComicsList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dccomics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, DcComic $dcComics)
    {
        $data = $request->all();
        // dd($data);
        $dcComics = new DcComic();
        $dcComics->fill($data);
        $dcComics->save();
        $dcComics = DcComic::create($data);
        return redirect()->route("dccomics.show", ["dccomic" => $dcComics->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComic $dccomic)
    {
        return view('dccomics.show', compact('dccomic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DcComic $dccomic)
    {
        return view('dccomics.edit', compact('dccomic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DcComic $dccomic)
    {
        $data = $request->all();
        $dccomic->update($data);
        return redirect()->route("dccomics.show", ["dccomic" => $dccomic->id]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $dccomic)
    {
        $dccomic->delete();
        return redirect()->route('dccomics.index');
    }
}

