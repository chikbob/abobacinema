<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        "film_id",
        "hall_id",
        "time"
    ];

    /**
     * film -> session
     * hall -> session
     * @return BelongsTo
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }


}
