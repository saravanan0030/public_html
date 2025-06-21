<?php

namespace App\Filament\Resources\CreateVisitorsTableResource\Pages;

use App\Filament\Resources\CreateVisitorsTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCreateVisitorsTable extends EditRecord
{
    protected static string $resource = CreateVisitorsTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
