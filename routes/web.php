<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CardLineController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('template.index');
// })->name('index');
Route::get('/movies', function () {
    return view('Dashboard.movies.index');
});
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('index');
//page our Movies
Route::get('/ourMovies',[App\Http\Controllers\MovieController::class, 'ourMovies'])->name('ourMovies');
Route::post('/filtreMovies',[App\Http\Controllers\MovieController::class, 'filtreMovies'])->name('filtreMovies');
Route::post('/filtreSeries',[App\Http\Controllers\SerieController::class, 'filtreSeries'])->name('filtreSeries');
//page our series
Route::get('/ourSeries',[App\Http\Controllers\SerieController::class, 'ourSeries'])->name('ourSeries');
Route::get('/oneSeries/{id}',[App\Http\Controllers\SerieController::class, 'show'])->name('oneSeries');;

Route::middleware(['auth','isAdmin'])->group(
    function(){
        Route::resource('/movies', MovieController::class);
        Route::resource('/series', SerieController::class);
        Route::resource('/seasons', SeasonController::class);
        Route::resource('/episodes', EpisodeController::class);
        Route::resource('/categories', CategorieController::class);
      
        Route::resource('/clients', UserController::class);
    }
);
Route::resource('/cardLine', CardLineController::class);

Route::post('/productToBuy', [App\Http\Controllers\ProductToBuyController::class, 'addMovie'])->name('productToBuy');
Route::post('/addSeason', [App\Http\Controllers\ProductToBuyController::class, 'addSeason'])->name('addSeason');
Route::get('/panier', [App\Http\Controllers\CardController::class, 'clientCardItems'])->name('panier');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/dashboard',[App\Http\Controllers\MovieController::class, 'index'])->name('admin.route')->middleware('admin');
Route::get('/admin', [App\Http\Controllers\MovieController::class, 'index'])->name('admin');

Auth::routes();
