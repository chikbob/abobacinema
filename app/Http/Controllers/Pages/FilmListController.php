<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Hall;
use App\Http\Resources\FilmResource;
use App\Http\Resources\HallResource;

class FilmListController
{
    public function __invoke(Film $film, Hall $hall): Response
    {
        return Inertia::render('films/[id]', [
            'film' => FilmResource::make($film),
            'hall' => HallResource::make($hall),
        ]);
    }
}
