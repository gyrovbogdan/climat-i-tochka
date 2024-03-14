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
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\CheckboxColumn;

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
                TextInput::make('price')->label('Цена'),
                Checkbox::make('is_promotional')->label('На главную страницу')
                    ->afterStateUpdated(function (?string $state, ?string $old) {
                        if ($state == true) {
                            AdditionalService::where('is_promotional', '1')->update(['is_promotional' => false]);
                        }
                    })
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название'),
                TextColumn::make('price')->label('Цена'),
                CheckboxColumn::make('is_promotional')->label('На главной')->sortable()->beforeStateUpdated(function ($record, $state) {
                    if ($state == true) {
                        AdditionalService::where('is_promotional', '1')->update(['is_promotional' => false]);
                    }
                }),
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
