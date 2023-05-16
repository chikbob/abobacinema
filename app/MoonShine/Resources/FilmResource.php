<?php

namespace App\MoonShine\Resources;

use App\Models\Film;
use MoonShine\Fields\HasOne;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class FilmResource extends Resource
{
	public static string $model = Film::class;

	public static string $title = 'Films';

    public string $titleField = 'movie_name';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Name', 'name'),
            Text::make('Original name', 'original_name'),
            Image::make('Poster', 'poster')
            ->disk('local')
            ->dir('public')
            ->removable()
            ->allowedExtensions(['jpg', 'jpeg', 'png'])
            ->required(),
            Number::make('Age', 'age'),
            Number::make('Year', 'year'),
            Number::make('Duration', 'duration'),
            Text::make('Description', 'description'),
            Date::make('Release start', 'release_start_at'),
            Date::make('Release end', 'release_end_at')
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id', 'name'];
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
