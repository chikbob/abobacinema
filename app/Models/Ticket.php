<?php

namespace App\Models;

use App\Models\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
