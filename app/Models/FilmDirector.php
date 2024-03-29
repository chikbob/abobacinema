<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FilmDirector extends Model
{
    use HasFactory;

    /**
     * film <- film_directors
     * @return BelongsTo
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
