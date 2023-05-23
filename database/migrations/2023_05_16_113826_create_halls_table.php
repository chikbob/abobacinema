<?php

use App\Models\HallGenerator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(HallGenerator::class);
            $table->integer('row');
            $table->integer('seat');
            $table->integer('price');
            $table->boolean('purchased');
            $table->timestamps();
        });
    }
};
