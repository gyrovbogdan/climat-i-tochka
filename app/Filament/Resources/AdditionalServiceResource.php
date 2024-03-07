<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdditionalServiceResource\Pages;
use App\Filament\Resources\AdditionalServiceResource\RelationManagers;
use App\Models\AdditionalService;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdditionalServiceResource extends Resource
{
    protected static ?string $model = AdditionalService::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench';

    protected static ?string $navigationGroup = "Услуги";

    public static function getNavigationLabel(): string
    {
        return 'Дополнительные услуги';
    }

    public static function getPluralLabel(): ?string
    {
        return 'Дополнительные услуги';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Название'),
                TextInput::make('price')->label('Цена')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название'),
                TextColumn::make('price')->label('Цена')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdditionalServices::route('/'),
            'create' => Pages\CreateAdditionalService::route('/create'),
            'edit' => Pages\EditAdditionalService::route('/{record}/edit'),
        ];
    }
}
