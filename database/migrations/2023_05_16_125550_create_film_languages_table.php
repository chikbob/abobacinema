<?php

use App\Models\Film;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('language');
            $table->timestamps();
        });
    }
};
