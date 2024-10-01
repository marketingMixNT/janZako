<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slide;
use Filament\Forms\Form;
use App\Models\Apartment;
use Filament\Tables\Table;
use Mockery\Matcher\Closure;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SlideResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SlideResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SlideResource extends Resource
{

    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Strona główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Shout::make('info')
                    ->content('Slajdy pojawiają sie na stronie głównej bądź na stronie apartamentu.')
                    ->type('info')
                    ->color('success')
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make(name: 'images')
                    ->label('Zdjęcia')
                    ->directory('slides')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'apartementy-jan-slide-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                    )
                    ->multiple()
                    ->appendFiles()
                    ->image()
                    ->reorderable()
                    ->maxSize(8192)
                    ->optimize('webp')
                    ->imageEditor()
                    ->maxFiles(5)
                    ->panelLayout('grid')
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required()
                    ->columnSpanFull(),

                

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->label('Zdjęcia')
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),

                Tables\Columns\TextColumn::make('apartment_id')
                    ->label('Położenie')
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        return $record->apartment->title ?? 'Strona Główna';
                    }),

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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Slajdy');
    }
    public static function getPluralLabel(): string
    {
        return __('Slajdy');
    }

    public static function getLabel(): string
    {
        return __('Slajd');
    }
}
