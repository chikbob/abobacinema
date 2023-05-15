<?php

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use App\Models\Directors;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class DirectorsResource extends Resource
{
	public static string $model = Directors::class;

	public static string $title = 'Directors';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            
            Text::make('Name', 'name')
            ->required(),

            Text::make('Surname', 'surname')
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
