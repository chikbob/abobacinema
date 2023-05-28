<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    use HasFactory;

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function hallGenerator(): BelongsTo
    {
        return $this->belongsTo(HallGenerator::class);
    }

    public function hallInfo()
    {
        return $this->belongsTo(HallInfo::class);
    }

}
