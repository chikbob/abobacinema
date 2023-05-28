<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use App\Models\Hall;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\FilmResource;
use App\Http\Resources\HallResource;
use App\Http\Resources\SessionResource;

class HallController
{
    public function __invoke(Hall $hall, Film $film): Response
    {
        return Inertia::render('halls/[id]', [
            'hall' => HallResource::make($hall),
            'film' => FilmResource::make($film),
        ]);
    }
}
