<?php

namespace App\Http\Resources;

use App\Models\Hall;
use App\Models\Session;
use App\Models\HallInfo;
use Illuminate\Http\Request;
use App\Models\HallGenerator;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            ...parent::toArray($request),
            'directors' => DirectorResource::collection($this->directors),
            'languages'=> LanguageResource::collection($this->languages),
            'genres' => GenreResource::collection($this->genres),
            'countries' => CountryResource::collection($this->countries),
            'studios' => StudioResource::collection($this->studios),
            'sessions' => SessionResource::collection($this->sessions),
            'films' => FilmResource::all(),
            'sessionsALL' => Session::all(),
            'hallName' => Hall::all(),
            'hallGeneratorInfo' => HallGenerator::all(),
            'hallInfo' => HallInfo::all()
        ];
    }
}
