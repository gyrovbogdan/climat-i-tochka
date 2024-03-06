<?php

namespace App\Filament\Resources\ConditionerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Forms\Components\TextInput;

class ConditionerModelsRelationManager extends RelationManager
{
    protected static string $relationship = 'conditionerModel';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Название')->columnSpanFull(),
                Select::make('area')->options(config('global.areas'))->label('Площадь помещения')->columnSpanFull(),
                TextInput::make('price')->label('Цена')->numeric(),
                TextInput::make('promo_price')->label('Акционная цена')->numeric(),
                TextInput::make('performance_cold')->label('Производительность(холод)'),
                TextInput::make('performance_warm')->label('Производительность(тепло)'),
                TextInput::make('power_input_cold')->label('Потребляемая мощность(холод)'),
                TextInput::make('power_input_warm')->label('Потребляемая мощность(тепло)'),
                TextInput::make('indoor_sizes')->label('Размеры внутреннего блока'),
                Checkbox::make('wi-fi')->label('Wi-Fi')->columnSpanFull()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название'),
                TextColumn::make('area')->label('Площадь помещения'),
                TextColumn::make('price')->label('Цена')->numeric(),
                TextColumn::make('promo_price')->label('Акционная цена')->numeric(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
