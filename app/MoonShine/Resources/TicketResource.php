<?php

namespace App\MoonShine\Resources;

use App\Models\Ticket;
use MoonShine\Fields\ID;

use MoonShine\Decorations\Grid;
use MoonShine\Fields\BelongsTo;
use MoonShine\Decorations\Column;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class TicketResource extends Resource
{
	public static string $model = Ticket::class;

	public static string $title = 'Ticket';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
                Grid::make([
                    Column::make([
                        BelongsTo::make('Session', 'session', fn($item) => 'Film: '. $item->film->movie_name .' | Time: '. $item->session_time)
                        ->searchable(),
                    ])
                    ->columnSpan(4),
                    Column::make([
                        BelongsTo::make('Seat in hall', 'seat', fn($item) => 'Hall: '. $item->name .' | Row: '. $item->row .' | Seat: '. $item->seat)
                        ->searchable(),
                    ])
                    ->columnSpan(4),
                    Column::make([
                        BelongsTo::make('Visitor', 'visitor', fn($item) => 'Name: '. $item->name .' | Telephone: '. $item->telephone .' | Email: '. $item->email)
                        ->searchable(),
                    ])
                    ->columnSpan(4),
            ])
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
