<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use App\Http\Resources\FilmResource;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class FilmListController
{
    public function __invoke(Film $film, Request $request): Response
    {
        return Inertia::render('films/[id]', [
            'film' => FilmResource::make($film)
        ]);
    }
}
