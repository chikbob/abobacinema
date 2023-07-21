<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FilmCountry extends Model
{
    use HasFactory;

    /**
     * film <- film_countries
     * @return BelongsTo
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
