<?php

namespace App\MoonShine\Resources;

use DateTime;
use App\Models\Sessions;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;
use MoonShine\Fields\Number;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class SessionsResource extends Resource
{
	public static string $model = Sessions::class;

	public static string $title = 'Sessions';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Film', 'film', fn($item) => $item->id .' | '. $item->movie_name)
            ->searchable()
            ->required(),
            Date::make('Time', 'session_time')
            ->withTime()
            ->required(),
            Number::make('Hall', 'session_hall')
            ->min(1)
            ->max(5)
            ->required(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
