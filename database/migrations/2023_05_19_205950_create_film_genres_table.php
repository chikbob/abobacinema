<?php

use App\Models\Film;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film_genres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class);
            $table->string('genre');
            $table->timestamps();
        });
    }
};
