<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\FilmsResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MoonShineUserResource::class, 
            MoonShineUserRoleResource::class,
            FilmsResource::class
        ]);
    }
}
