<?php

namespace App\Http\Controllers;

use App\Models\User;

//  insert manually this string to link model
Use App\Models\ModelExample;

use Illuminate\Http\Request;

class ModelExampleController extends Controller
{
public function index(){
    //get data by table
    $list = ModelExample::all();

    // name Models + compact('data by table')
    return view('ModelExample', compact('list'));
}
}
