<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class FilmPageController
{
    public function __invoke(Film $film, Request $request): Response
    {
        return Inertia::render('sessions', [
            'film' => Film::where('released','=',true)->paginate(10)
        ]);
    }
}
