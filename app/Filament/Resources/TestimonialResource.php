<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;


class TestimonialResource extends Resource
{

    use Translatable;
    protected static ?string $model = Testimonial::class;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Imię i nazwisko/pseudonim')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),

                TextInput::make('source')
                    ->label('Źródło opini')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),

                Textarea::make('content')
                    ->label('Treść opini')
                    ->required()
                    ->autosize()
                    ->columnSpanFull(),

                Forms\Components\Select::make('apartment_id')
                    ->label('Apartament')
                    ->relationship('apartment', 'title')
                    ->default(null),

                Toggle::make('home')
                    ->label('Strona główna')
                    ->columnSpanFull(),
                    



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([

                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Imię i nazwisko')
                    ->description(function (Testimonial $record) {
                        return Str::of($record->content)->limit(40);
                    })
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('apartment.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('home')
                    ->boolean(),

                Tables\Columns\TextColumn::make('source')
                    ->label('Źródło opini'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data utworzenia')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Data modyfikacji')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Opinie');
    }
    public static function getPluralLabel(): string
    {
        return __('Opinie');
    }

    public static function getLabel(): string
    {
        return __('Opinia');
    }
}
