<?php

use App\Http\Controllers\API\ItemsController;
use App\Http\Controllers\CdgController;
use App\Http\Controllers\ClassesStatsController;
use App\Http\Controllers\Hdv2Controller;
use App\Http\Controllers\HdvController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MembresController;
use App\Models\Members;
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

Route::view('/mentions', 'mentions')->name('mentions');

Route::get('/', [HdvController::class, 'getAll'])->name('home');

Route::get('/hdv', [HdvController::class, 'index'])->name('hdv');
Route::post('hdvAdd', [HdvController::class, 'store'])->name('hdvAdd');
Route::put('hdvRemove/{id}', [HdvController::class, 'hide'])->name('hdvRemove');


Route::get('/cdgArchives', [CdgController::class, 'index'])->name('cdgArchives');
Route::post('cdgAdd', [CdgController::class, 'store'])->name('cdgAdd');

// membres
Route::get('/membres', [MembresController::class, 'index'])->name('membres');

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


Route::get('/theorycraft', [ClassesStatsController::class,'index'])->name('theorycraft');


Route::get('/listing', [ListingController::class, 'showAll'])->name('listing');
Route::get('/listing', [ListingController::class, 'items'])->name('listing');
Route::post('listingAdd', [ListingController::class, 'store'])->name('listingAdd');


Route::get('/new-hdv', [Hdv2Controller::class, 'index'])->name('new-hdv');


Route::apiResource('api/items', ItemsController::class);
