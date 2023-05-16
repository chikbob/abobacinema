<?php

namespace App\Providers;

use App\Models\Visitor;
use App\MoonShine\Resources\FilmCountryResource;
use App\MoonShine\Resources\FilmDirectorResource;
use App\MoonShine\Resources\FilmStudioResource;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\HallResource;
use App\MoonShine\Resources\FilmResource;
use App\MoonShine\Resources\TicketResource;
use App\MoonShine\Resources\VisitorResource;
use App\MoonShine\Resources\SessionsResource;
use App\MoonShine\Resources\DirectorsResource;
use MoonShine\Resources\MoonShineUserResource;
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
                MenuItem::make('Films', new FilmResource(), 'heroicons.film'),
                MenuItem::make('Film Directors', new FilmDirectorResource(), 'heroicons.users'),
                MenuItem::make('Film Counties', new FilmCountryResource(), 'heroicons.users'),
                MenuItem::make('Film Studios', new FilmStudioResource(), 'heroicons.users'),
            ])
            ->icon('heroicons.view-columns'),

            MenuItem::make('Sessions', new SessionsResource(), 'heroicons.clock'),
            MenuItem::make('Halls', new HallResource(), 'heroicons.tv'),
            MenuItem::make('Visitors', new VisitorResource(), 'heroicons.user-group'),
            MenuItem::make('Tickets', new TicketResource(), 'heroicons.ticket'),
        ]);
    }
}
