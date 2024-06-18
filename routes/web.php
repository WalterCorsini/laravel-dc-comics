<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DcComicController;
use App\Http\Controllers\TrashController;
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

//link per andare alla pagina cestino
Route::get('/trash',[TrashController::class, 'trash'])->name('dccomics.trash');
//link per eliminare l'oggetto
Route::any('/delete/{id}', [TrashController::class, 'forceDelete'])->name('delete');
// link per ripristinare l'oggetto
Route::any('/restore/{id}', [TrashController::class, 'restore'])->name('restore');



Route::resource('dccomics', DcComicController::class);

