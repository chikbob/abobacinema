<?php

use App\Models\Film;
use App\Models\Hall;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class);
            $table->foreignIdFor(Hall::class);
            $table->dateTime('time');
            $table->timestamps();
        });
    }
};
