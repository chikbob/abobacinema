<?php

namespace App\MoonShine\Resources;

use App\Models\Visitor;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Email;
use MoonShine\Fields\Phone;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class VisitorResource extends Resource
{
	public static string $model = Visitor::class;

	public static string $title = 'Visitor';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Name', 'name')
            ->required(),
            Phone::make('Telephone', 'telephone')
            ->mask('+380 (999)-99-99-99')
            ->required(),
            Email::make('E-mail', 'email')
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
