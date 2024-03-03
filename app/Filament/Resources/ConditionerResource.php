<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConditionerResource\Pages;
use App\Filament\Resources\ConditionerResource\RelationManagers;
use App\Models\Conditioner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ConditionerResource extends Resource
{
    protected static ?string $model = Conditioner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Название'),
                TextInput::make('brand')->label('Марка'),
                TextInput::make('country')->label('Страна'),
                TextInput::make('area')->label('Площадь'),
                FileUpload::make('images')->label('Изображения')
                    ->multiple()->reorderable()->columnSpanFull(),
                RichEditor::make('description')->label('Описание'),
                TextInput::make('price')->label('Цена'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название'),
                TextColumn::make('brand')->label('Марка'),
                ImageColumn::make('images')->label('Изображение'),
                TextColumn::make('area')->label('Площадь'),
                TextColumn::make('price')->label('Цена'),
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
            'index' => Pages\ListConditioners::route('/'),
            'create' => Pages\CreateConditioner::route('/create'),
            'edit' => Pages\EditConditioner::route('/{record}/edit'),
        ];
    }
}
