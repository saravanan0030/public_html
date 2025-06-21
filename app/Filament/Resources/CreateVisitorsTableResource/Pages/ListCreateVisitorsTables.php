<?php

namespace App\Filament\Resources\CreateVisitorsTableResource\Pages;

use App\Filament\Resources\CreateVisitorsTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCreateVisitorsTables extends ListRecords
{
    protected static string $resource = CreateVisitorsTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
