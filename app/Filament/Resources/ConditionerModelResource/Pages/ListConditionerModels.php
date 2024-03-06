<?php

namespace App\Filament\Resources\ConditionerModelResource\Pages;

use App\Filament\Resources\ConditionerModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConditionerModels extends ListRecords
{
    protected static string $resource = ConditionerModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
