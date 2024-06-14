<?php


use Illuminate\Support\Facades\Route;

//  link to controller
use App\Http\Controllers\ModelExampleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


//  when use model to link to table in database and link to controller the route is:
Route::get('/nameurl',[ModelExampleController::class, 'index'])->name('alias');
        //  name url -  name controller -    name method controller   - alias page.blade.php
