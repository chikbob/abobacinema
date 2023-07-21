<?php

use App\Models\Country;
use App\Models\Film;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film_countries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('country');
            $table->timestamps();
        });
    }
};
