<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CategorieController;

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
    return view('HomePage');
});
Route::get('/movies', function () {
    return view('Dashboard.movies.index');
});


Route::resource('/movies', MovieController::class);
Route::resource('/series', SerieController::class);
Route::resource('/seasons', SeasonController::class);
Route::resource('/episodes', EpisodeController::class);
Route::resource('/categories', CategorieController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/dashboard',[App\Http\Controllers\MovieController::class, 'index'])->name('admin.route')->middleware('admin');
Route::get('/client', [App\Http\Controllers\MovieController::class, 'index'])->name('client');
Route::get('/admin', [App\Http\Controllers\SeasonController::class, 'index'])->name('admin');

