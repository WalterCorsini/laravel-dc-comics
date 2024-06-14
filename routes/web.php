<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DcComicController;
//  link to controller
use App\Http\Controllers\ModelExampleController;
use App\Models\DcComic;

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

Route::get('/',[DcComicController::class, 'index'])->name('dccomics.index');


// Route::get('/about', function () {
//     return view('about');
// })->name('about');


// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');


Route::resource('dccomics', DcComicController::class);

//  when use model to link to table in database and link to controller the route is:
// Route::get('/nameurl',[ModelExampleController::class, 'index'])->name('alias');
        //  name url -  name controller -    name method controller   - alias page.blade.php
