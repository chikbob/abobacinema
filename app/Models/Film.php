<?php

namespace App\Models;

use App\Models\FilmDirector;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    public function directors() {
        return $this->hasMany(FilmDirector::class); 
    }

    public function languages() {
        return $this->hasMany(FilmLanguage::class);
    }

    public function genres() {
        return $this->hasMany(FilmGenre::class);
    }

    public function countries() {
        return $this->hasMany(FilmCountry::class);
    }

    public function studios() {
        return $this->hasMany(FilmStudio::class);
    }
}
