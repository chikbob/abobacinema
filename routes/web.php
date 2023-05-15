<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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

// Route::get('/films/{film}', FilmPageController::class);

Route::get('/sessions', fn()=>Inertia::render('sessions'));

Route::get('/soon', fn()=>Inertia::render('soon'));

Route::get('/contacts', fn()=>Inertia::render('contacts'));
