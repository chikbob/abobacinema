<?php

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

use App\Models\ProducerCountry;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class ProducerCountryResource extends Resource
{
	public static string $model = ProducerCountry::class;

	public static string $title = 'Country of producer';

    public string $titleField = 'Country';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Text::make('Name of country' , 'name')
            ->required()
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
