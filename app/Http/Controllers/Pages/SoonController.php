<?php

namespace App\Http\Controllers\Pages;

use App\Models\Film;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class SoonController
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render('soon', [
            'soon' => Film::where('released','=',$request->released || false)->paginate(10)
        ]);
    }
}
