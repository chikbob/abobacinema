<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'poster',
        'age',
        'year',
        'original_name',
        'duration',
        'description',
        'released',
        'release_start_at',
        'release_end_at'
    ];

    public function directors() 
    {
        return $this->hasMany(FilmDirector::class);
    }

    public function languages() 
    {
        return $this->hasMany(FilmLanguage::class);
    }

    public function genres() 
    {
        return $this->hasMany(FilmGenre::class);
    }

    public function countries() 
    {
        return $this->hasMany(FilmCountry::class);
    }

    public function studios() 
    {
        return $this->hasMany(FilmStudio::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }
}
