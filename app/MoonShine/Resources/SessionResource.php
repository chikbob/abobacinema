<?php

namespace App\MoonShine\Resources;

use DateTime;
use App\Models\Session;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Number;

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
            BelongsTo::make('Hall', 'hall', fn($item) => $item->name .' | '. $item->row .' | '. $item->seat)
            ->searchable()
            ->required(),
            Date::make('Time', 'time')
            ->withTime()
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
