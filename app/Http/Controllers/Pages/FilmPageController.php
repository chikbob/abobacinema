<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use Inertia\Inertia;
use Inertia\Response;

class FilmPageController
{
    public function __invoke(Film $film): Response
    {
        // dd(Film::paginate(5)->toArray());
        return Inertia::render('sessions', [
            'film' => Film::paginate(10)
        ]);
    }
}
