<?php

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

use App\Models\ProducerStudio;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class ProducerStudioResource extends Resource
{
	public static string $model = ProducerStudio::class;

	public static string $title = 'ProducerStudio';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            
            Text::make('Name of studio', 'name')
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
