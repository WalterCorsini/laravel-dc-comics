<?php

namespace App\Http\Controllers;
use App\Models\DcComic;
use Illuminate\Http\Request;

class TrashController extends Controller
{
        //view deleted items page
        public function trash(){
            $dcComicsList = DcComic::onlyTrashed()->get();
            return view('dccomics.trash', compact('dcComicsList'));
        }

        // permanently deletes an item
        public function forceDelete($id){
            $dccomic = DcComic::withTrashed()->find($id);
            if ($dccomic) {
                $dccomic->forceDelete();
            }
            return redirect()->route('dccomics.trash');
        }

        //restore one element selected
        public function restore($id){
            $dccomic = DcComic::withTrashed()->find($id);
            if ($dccomic) {
                $dccomic->restore();
            }
            return redirect()->route('dccomics.trash');
        }

        // Restore everything
        public function restoreAll(){
            $dccomics = DcComic::onlyTrashed()->get();

        foreach ($dccomics as $dccomic) {
            $dccomic->restore();
        }
        return redirect()->route('dccomics.trash');
        }
}
