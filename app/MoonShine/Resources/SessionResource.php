<?php

namespace App\MoonShine\Resources;

use App\Models\Session;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class SessionResource extends Resource
{
	public static string $model = Session::class;

	public static string $title = 'Sessions';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Film', 'film', fn($item) => $item->id .' | '. $item->name)
            ->searchable()
            ->required(),
            Text::make('Time', 'time')
            ->mask("99:99")
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
