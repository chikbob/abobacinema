<?php

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use App\Models\FilmGenre;

use MoonShine\Fields\Text;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class FilmGenreResource extends Resource
{
	public static string $model = FilmGenre::class;

	public static string $title = 'FilmGenre';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Film', 'film', fn($item) => $item->id .' | '. $item->name)
            ->searchable()
            ->required(),
            Text::make('Genre', 'genre')
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
