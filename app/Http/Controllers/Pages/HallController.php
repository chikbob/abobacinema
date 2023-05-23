<?php

namespace App\Http\Controllers\Pages;

use App\Models\Hall;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\HallResource;

class HallController
{
    public function __invoke(Hall $hall): Response
    {
        return Inertia::render('halls/[id]', [
            'hall' => HallResource::make($hall)
        ]);
    }
}
