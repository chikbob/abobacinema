<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Hall;
use App\Http\Resources\FilmResource;
use App\Http\Resources\HallResource;
use App\Http\Resources\SessionResource;
use App\Models\Session;

class FilmListController
{
    public function __invoke(Film $film, Hall $hall, Session $session): Response
    {
        return Inertia::render('films/[id]', [
            'sessions' => SessionResource::make($session),
            'sessionALL' => Session::all(),
            'film' => FilmResource::make($film),
            'halls' => HallResource::make($hall),
            'hallsALL' => Hall::all(),
        ]);
    }
}
