<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FilmLanguage extends Model
{
    use HasFactory;

    /**
     * film <- film_languages
     * @return BelongsTo
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
