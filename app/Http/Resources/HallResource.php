<?php

namespace App\Http\Resources;

use App\Models\HallGenerator;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HallResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            ...parent::toArray($request), 
            $this->hall_id,
            'sessions' =>  Session::all()
        ];
    }
}
