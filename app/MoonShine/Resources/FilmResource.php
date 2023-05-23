<?php

namespace App\MoonShine\Resources;

use App\Models\Film;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;
use MoonShine\Fields\Text;

use MoonShine\Fields\Image;
use MoonShine\Fields\HasOne;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Url;

class FilmResource extends Resource
{
	public static string $model = Film::class;

	public static string $title = 'Films';

    public string $titleField = 'movie_name';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Name', 'name')
            ->required(),
            Text::make('Original name', 'original_name')
            ->hideOnIndex()
            ->required(),
            Url::make('Poster', 'poster')
            ->hideOnIndex()
            ->required(),
            Number::make('Age', 'age')
            ->hideOnIndex()
            ->required(),
            Number::make('Year', 'year')
            ->required(),
            Number::make('Duration', 'duration')
            ->hideOnIndex()
            ->required(),
            Text::make('Description', 'description')
            ->hideOnIndex()
            ->required(),
            SwitchBoolean::make('Released', 'released'),
            Date::make('Release start', 'release_start_at')
            ->nullable(),
            Date::make('Release end', 'release_end_at')
            ->nullable()
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
