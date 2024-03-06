<?php

namespace App\Filament\Resources\ConditionerModelResource\Pages;

use App\Filament\Resources\ConditionerModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConditionerModel extends EditRecord
{
    protected static string $resource = ConditionerModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
