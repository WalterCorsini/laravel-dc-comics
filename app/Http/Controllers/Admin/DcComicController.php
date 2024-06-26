<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DcComic;
use App\Http\Requests\StoreDcComicRequest;
use App\Http\Requests\UpdateDcComicRequest;

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
    public function store(StoreDcComicRequest $request, DcComic $dcComics)
    {
        $data = $request->all();
        $dcComics = DcComic::create($data);
        return redirect()->route("dccomics.show", ["dccomic" => $dcComics->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComic $dccomic)
    {
        $curComic = $dccomic;
        return view('dccomics.show', compact('curComic'));
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
    public function update(UpdateDcComicRequest $request, DcComic $dccomic)
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

    //view deleted items page
    public function trash(){
        $dcComicsList = DcComic::onlyTrashed()->get();
        return view('dccomics.trash', compact('dcComicsList'));
    }

    // permanently deletes an item
    public function forceDelete($id){
        DcComic::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('dccomics.trash');
    }

    //restore one element selected
    public function restore($id){
        $dccomic = DcComic::onlyTrashed()->find($id)->restore();
        return redirect()->route('dccomics.trash');
    }

    // Restore everything
    public function restoreAll(){
        DcComic::onlyTrashed()->restore();
    return redirect()->route('dccomics.trash');
    }
}

