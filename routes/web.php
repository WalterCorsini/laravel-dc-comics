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

Route::resource('dccomics', DcComicController::class);

