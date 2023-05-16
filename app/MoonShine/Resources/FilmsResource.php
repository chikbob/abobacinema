<?php

namespace App\MoonShine\Resources;

use App\Models\Films;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text; 
use MoonShine\Fields\HasOne;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class FilmsResource extends Resource
{
	public static string $model = Films::class;

	public static string $title = 'Films';

    public string $titleField = 'movie_name';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Text::make('Movie title', 'movie_name')
            ->required(),

            Image::make('Poster', 'poster')
            ->disk('local')
            ->dir('public')
            ->removable()
            ->allowedExtensions(['jpg', 'jpeg', 'png'])
            ->required(),

            Select::make('Age limit', 'age')
            ->options([
                'value 1' => '0+',
                'value 2' => '6+',
                'value 3' => '12+',
                'value 4' => '16+',
                'value 5' => '18+',
            ])
            ->required(),

            Number::make('Release year', 'year')
            ->min(1950)
            ->max(2077)
            ->mask('9999')
            ->required(),
            
            Text::make('Original name of movie', 'original_name')
            ->required(),

            BelongsTo::make('Directors', 'director', fn($item) => $item->id .' | '. $item->name .' '. $item->surname)
            ->required(),

            Date::make('Release start', 'start_release')
            ->required(),

            Date::make('Release end', 'end_release')
            ->required(),

            Select::make('Language of translate', 'language')
            ->options([
                'value 1' => 'Original',
                'value 2' => 'English',
                'value 3' => 'Ukrainian',
                'value 4' => 'Finnish',
                'value 5' => 'German',
                'value 6' => 'Spanish',
                'value 7' => 'Belarusian',
                'value 8' => 'Indian',
                'value 9' => 'Arabic',
                'value 10' => 'Armenian',
                'value 11' => 'Greek',
                'value 12' => 'Georgian',
                'value 13' => 'Kazakh',
                'value 14' => 'Chinese',
                'value 15' => 'Korean',
                'value 16' => 'Latvian',
                'value 17' => 'Polish',
                'value 18' => 'Thai',
                'value 19' => 'Turkish',
                'value 20' => 'Uzbek',
                'value 21' => 'French',
                'value 22' => 'Croatian',
                'value 23' => 'Czech',
                'value 24' => 'Japanese',
            ])
            ->required(),

            Select::make('Genre of movie', 'genre')
            ->options([
                'value 1' => 'Anime',
                'value 2' => 'Biographical',
                'value 3' => 'Action',
                'value 4' => 'Western',
                'value 5' => 'Military',
                'value 6' => 'Detective',
                'value 7' => 'Baby',
                'value 8' => 'Documentary',
                'value 9' => 'Drama',
                'value 10' => 'Film comic',
                'value 11' => 'Comedy',
                'value 12' => 'Concert',
                'value 13' => 'Short film',
                'value 14' => 'Crime',
                'value 15' => 'Melodrama',
                'value 16' => 'Mysticism',
                'value 17' => 'Historical',
                'value 18' => 'Music',
                'value 19' => 'Cartoon',
                'value 20' => 'Musical',
                'value 21' => 'Scientific',
                'value 22' => 'Noir',
                'value 23' => 'Adventures',
                'value 24' => 'Reality show',
                'value 25' => 'Family',
                'value 26' => 'Sport',
                'value 27' => 'A talk show',
                'value 28' => 'Thriller',
                'value 29' => 'Horrors',
                'value 30' => 'Fantasy',
                'value 31' => 'Erotica',
                'value 32' => 'Animation',
            ])
            ->multiple()
            ->searchable()
            ->required(),

            Text::make('Duration', 'duration')
            ->mask('9:99')
            ->required(),

            BelongsTo::make('Producer country', 'country', fn($item) => $item->name)
            ->required(),

            BelongsTo::make('Producer studio', 'studio', 'id')
            ->required()
            ->multiple()
            ->searchable(),
            
            Text::make('Description', 'description')
            ->required(),
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
