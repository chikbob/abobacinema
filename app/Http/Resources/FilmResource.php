<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
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
            'countries' => CountryResource::collection($this->countries),
            'genres' => GenreResource::collection($this->genres),
            'studios' => StudioResource::collection($this->studios),
        ];
    }
}
