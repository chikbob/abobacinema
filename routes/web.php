<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\FilmListController;
use App\Http\Controllers\Pages\FilmPageController;
use App\Http\Controllers\Pages\SoonController;

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
    return Inertia::render('main');
});

Route::get('/films/{film}', FilmListController::class);

Route::get('/sessions', FilmPageController::class);

Route::get('/soon', SoonController::class);

Route::get('/contacts', fn()=>Inertia::render('contacts'));
