<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HallInfo extends Model
{
    use HasFactory;

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function hallGenerator()
    {
        return $this->belongsTo(Hall::class);
    }
}
