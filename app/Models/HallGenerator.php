<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HallGenerator extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
