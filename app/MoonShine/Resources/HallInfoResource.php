<?php

namespace App\MoonShine\Resources;

use App\Models\HallInfo;
use MoonShine\Fields\ID;

use MoonShine\Fields\Number;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class HallInfoResource extends Resource
{
	public static string $model = HallInfo::class;

	public static string $title = 'HallInfo';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Name', 'hall_id', fn($item) => $item->id .' | '. $item->HallGenerator->name .' | '. $item->Session->time .' | id Фильма: '. $item->Session->film_id),
            Number::make('Row', 'row')
            ->min(1)
            ->max(25)
            ->required(),
            Number::make('Seat', 'seat')
            ->min(1)
            ->max(30)
            ->required(),
            Number::make('Price', 'price')
            ->min(1)
            ->max(99999)
            ->required(),
            NoInput::make('Purchased', 'purchased')
            ->default(0)
            ->boolean(),
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
