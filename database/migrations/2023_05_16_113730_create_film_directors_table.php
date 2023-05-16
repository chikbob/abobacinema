<?php

use App\Models\Director;
use App\Models\Film;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film_directors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class);
            $table->string('director');
            $table->timestamps();
        });
    }
};
