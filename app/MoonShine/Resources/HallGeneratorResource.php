<?php

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

use MoonShine\Fields\Number;
use App\Models\HallGenerator;
use MoonShine\Resources\Resource;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class HallGeneratorResource extends Resource
{
	public static string $model = HallGenerator::class;

	public static string $title = 'HallGenerator';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Hall name', 'name')
            ->required(),
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
            SwitchBoolean::make('Purchased', 'purchased'),
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
