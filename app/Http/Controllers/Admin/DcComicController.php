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
        return view('dccomics.index');
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
    public function store(Request $request)
    {
        $data = $request->all();
        $dcComics = new DcComic();
        $dcComics->fill($data);
        $dcComics->save();
        return redirect()->route("dccomics.show", ["dcComics" => $dcComics->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //qui manca la parte del collegamento tramite i parametri che riceve show
        return view('dccomics.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
