<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory;

    /**
     * film -> session
     * hall -> session
     * @return BelongsTo
     */
    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }

    // public function seats()
    // {
    //     return $this->hasMany(Seat::class);
    // }
}
