<?php

namespace App\Http\Controllers\Pages;

use App\Http\Resources\FilmsResource;
use App\Models\Films;
use Inertia\Inertia;
use Inertia\Response;

class FilmPageController
{
    /**
     * Film page
     * @param Films $film
     * @return Response
     */
    public function __invoke(Films $film): Response
    {
        return Inertia::render('films/[id]', [
            'Film' => FilmsResource::make($film)
        ]);
    }
}
