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
use App\Models\ConditionerModel;

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
                Checkbox::make('wi-fi')->label('Wi-Fi')->columnSpanFull(),
                Checkbox::make('is_promotional')->label('На главную страницу')
                    ->afterStateUpdated(function (?string $state, ?string $old) {
                        if ($state == true) {
                            ConditionerModel::where('is_promotional', '1')->update(['is_promotional' => false]);
                        }
                    })
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название')->url(fn (ConditionerModel $model) => route('conditioners.show', ['conditioner' => $model['id']])),
                TextColumn::make('area')->label('Площадь помещения')->sortable(),
                TextColumn::make('price')->label('Цена')->numeric(),
                TextColumn::make('promo_price')->label('Акционная цена')->numeric(),
                CheckboxColumn::make('is_promotional')->label('На главной')->sortable()->beforeStateUpdated(function ($record, $state) {
                    if ($state == true) {
                        ConditionerModel::where('is_promotional', '1')->update(['is_promotional' => false]);
                    }
                }),
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
