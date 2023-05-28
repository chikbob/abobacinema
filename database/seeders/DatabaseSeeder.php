<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Film;
use App\Models\Hall;
use App\Models\Visitor;
use App\Models\FilmStudio;
use App\Models\FilmCountry;
use App\Models\FilmDirector;
use App\Models\FilmGenre;
use App\Models\FilmLanguage;
use App\Models\HallGenerator;
use App\Models\Session;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'R',
        //     'email' => 'ricarrdo1488@gmail.com',
        // ]);

        // Film::factory(10)->create();
        // Hall::factory(10)->create();
        // Visitor::factory(10)->create();
        FilmCountry::factory(10)->create();
        FilmDirector::factory(10)->create();
        FilmStudio::factory(10)->create();
        FilmLanguage::factory(10)->create();
        FilmGenre::factory(10)->create();
        Session::factory(10)->create();
        Ticket::factory(10)->create();
    }
}
