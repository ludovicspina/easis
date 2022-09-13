<?php

use App\Http\Controllers\CdgController;
use App\Http\Controllers\HdvController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::view('/', 'home')->name('home');


Route::get('/hdv', [HdvController::class, 'index'])->name('hdv');
Route::post('hdvAdd', [HdvController::class, 'store'])->name('hdvAdd');


Route::get('/cdgArchives', [CdgController::class, 'index'])->name('cdgArchives');
Route::post('cdgAdd', [CdgController::class, 'store'])->name('cdgAdd');



// classes
Route::view('/classes', 'classes/classes')->name('classes');

//astuce
Route::view('/astuces', 'astuces')->name('astuces');

//wiki
Route::view('/wiki', 'wiki/wiki')->name('wiki');

//guildes
Route::view('/guildes', 'guildes')->name('guildes');

//historique
Route::view('/historique', 'historique')->name('historique');

//contribution
Route::view('/contribution', 'contribution')->name('contribution');

Route::view('/mercenaire', 'classes/mercenaire')->name('mercenaire');
Route::view('/acrobate', 'classes/acrobate')->name('acrobate');
Route::view('/acolyte', 'classes/acolyte')->name('acolyte');
Route::view('/magicien', 'classes/magicien')->name('magicien');



