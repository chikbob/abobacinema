<?php

namespace App\Providers;

use App\Models\Visitor;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\FilmsResource;
use App\MoonShine\Resources\VisitorResource;
use App\MoonShine\Resources\SessionsResource;
use App\MoonShine\Resources\DirectorsResource;
use App\MoonShine\Resources\HallResource;
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
            MenuItem::make('Films', new FilmsResource(), 'heroicons.film'),
            MenuGroup::make('Tables for Films', [
                MenuItem::make('Directors', new DirectorsResource(), 'heroicons.users'),
                MenuItem::make('Countries', new ProducerCountryResource(), 'heroicons.globe-europe-africa'),
                MenuItem::make('Studios', new ProducerStudioResource(), 'heroicons.video-camera'),
                
            ])
            ->icon('heroicons.view-columns'),
            MenuItem::make('Sessions', new SessionsResource(), 'heroicons.clock'),
            MenuItem::make('Visitors', new VisitorResource(), 'heroicons.user-group')
            ->badge(fn() => Visitor::query()->count()),
            MenuItem::make('Halls', new HallResource(), 'heroicons.tv'),
        ]);
    }
}
