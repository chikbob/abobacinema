<?php

namespace App\MoonShine\Resources;

use App\Models\Films;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text; 
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class FilmsResource extends Resource
{
	public static string $model = Films::class;

	public static string $title = 'Films';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Movie title', 'name'),
            Image::make('Poster', 'poster')
            ->allowedExtensions(['jpg', 'png']),
            Text::make('Age limit', 'age'),
            Text::make('Release year', 'year'),
            Text::make('Original name of movie', 'original_name'),
            Text::make('Directors', 'directors'),
            Date::make('Release start', 'start_release'),
            Date::make('Release end', 'end_release'),
            Text::make('Language of translate', 'language'),
            Text::make('Genre of movie', 'genre'),
            Text::make('Duration', 'duration'),
            Text::make('Producer country', 'country'),
            Text::make('Producer studio', 'studio'),
            Text::make('Description', 'description'),
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
