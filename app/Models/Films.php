<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Films extends Model
{
    protected $table = 'films';

    protected $casts = [
        'genre' => 'json',
        'studio' => 'json'
    ];

    use HasFactory;

    public function director(): BelongsTo
    {
        return $this->belongsTo(Directors::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(ProducerCountry::class);
    }

    public function studio(): BelongsTo
    {
        return $this->belongsTo(ProducerStudio::class);
    }

    public $guarded = [];
}