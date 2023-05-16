<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->string('poster');
            $table->string('age');
            $table->string('year');
            $table->string('original_name');
            $table->text('director_id');
            $table->dateTime('start_release');
            $table->dateTime('end_release');
            $table->string('language');
            $table->json('genre');
            $table->text('duration');
            $table->text('country_id');
            $table->json('studio_id');
            $table->text('description');
            $table->timestamps();
        });
    }
};
