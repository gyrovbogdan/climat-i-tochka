<?php

namespace App\Filament\Resources\ConditionerResource\Pages;

use App\Filament\Resources\ConditionerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConditioners extends ListRecords
{
    protected static string $resource = ConditionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
