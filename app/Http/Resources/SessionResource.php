<?php

namespace App\Http\Resources;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
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
            'times' => $this->time,
            'halls' => Hall::all(),
        ];
    }
}
