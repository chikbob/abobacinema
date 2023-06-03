<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\FilmDirector;

use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class FilmDirectorResource extends Resource
{
	public static string $model = FilmDirector::class;

	public static string $title = 'FilmDirector';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Film', 'film', fn($item) => $item->id .' | '. $item->name)
            ->searchable()
            ->required(),
            Text::make('Director', 'director')
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
