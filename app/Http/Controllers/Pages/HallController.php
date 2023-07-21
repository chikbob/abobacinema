<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use App\Models\Hall;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\FilmResource;
use App\Http\Resources\HallResource;
use App\Http\Resources\SessionResource;
use App\Models\Session;

class HallController
{
    public function __invoke(Hall $hall, Film $film, Session $session): Response
    {
        return Inertia::render('halls/[id]', [
            'sessions' => SessionResource::make($session),
            'halls' => HallResource::make($hall),
            'film' => FilmResource::make($film),
        ]);
    }
}
