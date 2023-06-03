<?php

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use App\Models\FilmStudio;

use MoonShine\Fields\Text;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class FilmStudioResource extends Resource
{
	public static string $model = FilmStudio::class;

	public static string $title = 'FilmStudio';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Film', 'film', fn($item) => $item->id .' | '. $item->name)
            ->searchable()
            ->required(),
            Text::make('Studio', 'studio')
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
