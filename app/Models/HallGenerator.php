<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallGenerator extends Model
{
    use HasFactory;

    public function hall() 
    {
        return $this->belongsTo(Hall::class);
    }
}
