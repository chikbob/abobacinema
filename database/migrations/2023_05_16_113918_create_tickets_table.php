<?php

use App\Models\Hall;
use App\Models\Visitor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hall::class)->constrained();
            $table->foreignIdFor(Visitor::class);
            $table->timestamps();
        });
    }
};
