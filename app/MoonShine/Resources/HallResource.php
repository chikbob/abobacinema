<?php

namespace App\MoonShine\Resources;

use App\Models\Hall;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Resources\Resource;
use MoonShine\Fields\SwitchBoolean;
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
            BelongsTo::make('Name', 'hall_generator_id', fn($item) => $item->id .' | '. $item->name)
            ->searchable(),
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
            SwitchBoolean::make('Purchased', 'purchased')
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
