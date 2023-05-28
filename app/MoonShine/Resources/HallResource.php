<?php

namespace App\MoonShine\Resources;

use App\Models\Hall;
use MoonShine\Fields\ID;

use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\BelongsTo;

class HallResource extends Resource
{
	public static string $model = Hall::class;

	public static string $title = 'Hall';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Hall', 'hall_generator_id', fn($item) => $item->id .' | '. $item->name)
            ->searchable(),
            BelongsTo::make('Session', 'session_id', fn($item) => $item->id .' | Film: '. $item->film->name .' | Time: '. $item->time)
            ->searchable(),
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
