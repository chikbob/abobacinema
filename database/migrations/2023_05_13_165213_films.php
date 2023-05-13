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
            $table->string('name');
            $table->string('poster');
            $table->string('age');
            $table->string('year');
            $table->string('original_name');
            $table->string('directors');
            $table->dateTime('start_release');
            $table->dateTime('end_release');
            $table->string('language');
            $table->string('genre');
            $table->string('duration');
            $table->string('country');
            $table->string('studio');
            $table->string('description');
            $table->timestamps();
        });
    }
};
