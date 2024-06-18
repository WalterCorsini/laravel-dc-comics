<?php


use Illuminate\Support\Facades\Route;
//  link to controller
use App\Http\Controllers\ModelExampleController;
use App\Http\Controllers\Admin\DcComicController;
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



//link to go to trash page
Route::get('/trash',[DcComicController::class, 'trash'])->name('dccomics.trash');

//link deletes an item permanently
Route::any('/delete/{id}', [DcComicController::class, 'forceDelete'])->name('delete');

// link to restore selected item
Route::any('/restore/{id}', [DcComicController::class, 'restore'])->name('restore');

// link to restore All Item
Route::any('restoreall', [DcComicController::class, 'restoreAll'])->name('restoreall');

// general route to DcComicController
Route::resource('dccomics', DcComicController::class);

//  route index
Route::get('/',[DcComicController::class, 'index'])->name('dccomics.index');
