<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('poster');
            $table->string('age');
            $table->year('year');
            $table->string('original_name');
            $table->integer('duration');
            $table->text('description');
            $table->boolean('released');
            $table->date('release_start_at')
            ->nullable();
            $table->date('release_end_at')
            ->nullable();
            $table->timestamps();
        });
    }
};
