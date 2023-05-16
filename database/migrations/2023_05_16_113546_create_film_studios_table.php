<?php

use App\Models\Film;
use App\Models\Studio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film_studios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class);
            $table->string('studio');
            $table->timestamps();
        });
    }
};
