<?php

namespace App\MoonShine\Resources;

use App\Models\Hall;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\NoInput;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Resources\Resource;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Column;

class HallResource extends Resource
{
	public static string $model = Hall::class;

	public static string $title = 'Hall';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Text::make('Hall_name', 'name')
            ->required(),

            Number::make('Row', 'row')
            ->required(),

            Number::make('Seat', 'seat')
            ->required(),

            SwitchBoolean::make('Purchased?', 'purchased')
            ->onValue(1)
            ->offValue(0), 

            // NoInput::make() Сделать через ноуинпут что когда кто-то купил билет на эти места то было значение true
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
