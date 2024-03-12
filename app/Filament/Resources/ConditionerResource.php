<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConditionerResource\Pages;
use App\Filament\Resources\ConditionerResource\RelationManagers;
use App\Filament\Resources\ConditionerResource\RelationManagers\ConditionerModelsRelationManager;
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
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;


class ConditionerResource extends Resource
{
    protected static ?string $model = Conditioner::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Кондиционеры';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Название')->columnSpanFull(),
                FileUpload::make('images')->label('Изображения')
                    ->multiple()->reorderable()->columnSpanFull(),
                TextInput::make('brand')->label('Марка'),
                Select::make('country')->label('Страна')->options([
                    'Австрия',
                    'Беларусь',
                    'Бельгия',
                    'Болгария',
                    'Чехия',
                    'Дания',
                    'Финляндия',
                    'Франция',
                    'Германия',
                    'Греция',
                    'Венгрия',
                    'Исландия',
                    'Ирландия',
                    'Италия',
                    'Латвия',
                    'Литва',
                    'Люксембург',
                    'Македония',
                    'Нидерланды',
                    'Норвегия',
                    'Польша',
                    'Португалия',
                    'Румыния',
                    'Россия',
                    'Сербия',
                    'Словакия',
                    'Словения',
                    'Испания',
                    'Швеция',
                    'Швейцария',
                    'Турция',
                    'Украина',
                    'Великобритания',

                    // Азия
                    'Бахрейн',
                    'Бангладеш',
                    'Китай',
                    'Гонконг',
                    'Индия',
                    'Индонезия',
                    'Иран',
                    'Израиль',
                    'Япония',
                    'Иордания',
                    'Кувейт',
                    'Ливан',
                    'Малайзия',
                    'Мальдивы',
                    'Оман',
                    'Пакистан',
                    'Филиппины',
                    'Катар',
                    'Саудовская Аравия',
                    'Сингапур',
                    'Южная Корея',
                    'Шри-Ланка',
                    'Сирия',
                    'Тайвань',
                    'Таиланд',
                    'ОАЭ',
                    'Вьетнам',

                    // Северная Америка
                    'Канада',
                    'Мексика',
                    'США',

                    // Южная Америка
                    'Аргентина',
                    'Бразилия',
                    'Чили',
                    'Колумбия',
                    'Эквадор',
                    'Перу',
                    'Уругвай',
                    'Венесуэла',

                    // Африка
                    'Алжир',
                    'Египет',
                    'ЮАР',
                    'Марокко',
                    'Нигерия',
                    'Тунис',

                    // Океания
                    'Австралия',
                    'Новая Зеландия',
                ])->searchable(),
                RichEditor::make('description')->label('Описание')->columnSpanFull(),
                Select::make('type')->options(config('global.types'))->searchable()->label('Тип'),
                Checkbox::make('inverter')->label('Инвертeр')->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название')->searchable()->sortable(),
                ImageColumn::make('images')->label('Изображения'),
                TextColumn::make('brand')->label('Марка')->sortable(),
                CheckboxColumn::make('inverter')->label('Инвертeр')->sortable()
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
        return 'Серии Кондиционеров';
    }

    public static function getPluralLabel(): ?string
    {
        return 'Кондиционеры';
    }

    public static function getRelations(): array
    {
        return [
            ConditionerModelsRelationManager::class
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
