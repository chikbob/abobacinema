<?php

use App\Models\Hall;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hall_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hall::class);
            $table->integer('row');
            $table->integer('seat');
            $table->integer('price');
            $table->boolean('purchased')
            ->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_infos');
    }
};
