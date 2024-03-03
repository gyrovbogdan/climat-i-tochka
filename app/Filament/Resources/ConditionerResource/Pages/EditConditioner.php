<?php

namespace App\Filament\Resources\ConditionerResource\Pages;

use App\Filament\Resources\ConditionerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConditioner extends EditRecord
{
    protected static string $resource = ConditionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
