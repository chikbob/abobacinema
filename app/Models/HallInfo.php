<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HallInfo extends Model
{
    use HasFactory;

    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }

    public function hallGenerator(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }
}
