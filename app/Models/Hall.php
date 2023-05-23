<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hall extends Model
{
    use HasFactory;

    public function session() 
    {
        return $this->belongsTo(Session::class);
    }

    public function hallGenerator(): BelongsTo
    {
        return $this->belongsTo(HallGenerator::class);
    }

}
