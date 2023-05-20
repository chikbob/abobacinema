<?php

namespace App\Providers;

use App\Models\Film;
use App\Models\Ticket;
use App\Models\Visitor;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;

use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\FilmResource;
use App\MoonShine\Resources\HallResource;
use App\MoonShine\Resources\TicketResource;
use App\MoonShine\Resources\SessionResource;
use App\MoonShine\Resources\VisitorResource;
use App\MoonShine\Resources\DirectorsResource;
use App\MoonShine\Resources\FilmGenreResource;
use MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\FilmStudioResource;
use App\MoonShine\Resources\FilmCountryResource;
use App\MoonShine\Resources\FilmDirectorResource;
use App\MoonShine\Resources\FilmLanguageResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\ProducerStudioResource;
use App\MoonShine\Resources\ProducerCountryResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('System', [
                MenuItem::make('Users', new MoonShineUserResource(), 'heroicons.user-circle'),
                MenuItem::make('Roles', new MoonShineUserRoleResource(), 'heroicons.shield-exclamation')
            ])->icon('heroicons.cog-6-tooth'),

            MenuGroup::make('Films', [
                MenuItem::make('Films', new FilmResource(), 'heroicons.film')
                ->badge(fn() => Film::query()->count()),
                MenuItem::make('Film Directors', new FilmDirectorResource(), 'heroicons.users'),
                MenuItem::make('Film Countries', new FilmCountryResource(), 'heroicons.globe-europe-africa'),
                MenuItem::make('Film Studios', new FilmStudioResource(), 'heroicons.video-camera'),
                MenuItem::make('Film Languages', new FilmLanguageResource(), 'heroicons.language'),
                MenuItem::make('Film Genres', new FilmGenreResource(), 'heroicons.language'),
            ])
            ->icon('heroicons.view-columns'),

            MenuItem::make('Sessions', new SessionResource(), 'heroicons.clock'),
            MenuItem::make('Halls', new HallResource(), 'heroicons.tv'),
            MenuItem::make('Visitors', new VisitorResource(), 'heroicons.user-group')
            ->badge(fn() => Visitor::query()->count()),
            MenuItem::make('Tickets', new TicketResource(), 'heroicons.ticket')
            ->badge(fn() => Ticket::query()->count()),
        ]);
    }
}
