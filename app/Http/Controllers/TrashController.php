<?php

namespace App\Http\Controllers;
use App\Models\DcComic;
use Illuminate\Http\Request;

class TrashController extends Controller
{
        //metodo che ci rimanda alla pagina che visualizza il cestino con i record eliminati
        public function trash(){
            $dcComicsList = DcComic::onlyTrashed()->get();
            return view('dccomics.trash', compact('dcComicsList'));
        }

        // metodo che elimina definitivamente il record  e ci riporta al cestino
        public function forceDelete($id){
            $dccomic = DcComic::withTrashed()->find($id);
            if ($dccomic) {
                $dccomic->forceDelete();
            }
            return redirect()->route('dccomics.trash');
        }
}
