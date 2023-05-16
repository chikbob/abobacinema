<?php

namespace App\Models;

use App\Models\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }
}
