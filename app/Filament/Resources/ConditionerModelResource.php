<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConditionerModelResource\Pages;
use App\Filament\Resources\ConditionerModelResource\RelationManagers;
use App\Models\ConditionerModel;
use Faker\Provider\ar_EG\Text;
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
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;

class ConditionerModelResource extends Resource
{
    protected static ?string $model = ConditionerModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    protected static ?string $navigationGroup = 'Кондиционеры';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Название'),
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

    public static function table(Table $table): Table
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
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getNavigationLabel(): string
    {
        return 'Модели Кондиционеров';
    }

    public static function getPluralLabel(): ?string
    {
        return 'Модели Кондиционеров';
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
            'index' => Pages\ListConditionerModels::route('/'),
            'create' => Pages\CreateConditionerModel::route('/create'),
            'edit' => Pages\EditConditionerModel::route('/{record}/edit'),
        ];
    }
}
