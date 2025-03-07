<?php

namespace App\Filament\Resources\AgendaKepalaResource\Pages;

use App\Filament\Resources\AgendaKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAgendaKepalas extends ListRecords
{
    protected static string $resource = AgendaKepalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
