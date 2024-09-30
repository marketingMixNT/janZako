<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\LocalAttraction;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LocalAttractionResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\LocalAttractionResource\RelationManagers;


class LocalAttractionResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = LocalAttraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Shout::make('info')
                    ->content('Loklane atrakcje pojawią się jako zajawka na stronie głównej oraz na własnej podstronie.')
                    ->type('info')
                    ->color('success')
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('description')
                    ->label('Opis')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                    ])
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('images')
                    ->label('Zdjęcia')
                    ->reorderable()
                    ->multiple()
                    ->directory('localAttractions')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'hotel-jan-lokalne-atrakcje-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                    )
                    ->appendFiles()
                    ->helperText('Wstaw 3 zdjęcia, pierwsze będzie miniaturką')
                    ->image()
                    ->minFiles(3)
                    ->maxFiles(3)
                    ->maxSize(8192)
                    ->optimize('webp')
                    ->imageEditor()
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
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([

                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('images')
                    ->label('Miniaturka')
                    ->getStateUsing(function (LocalAttraction $record) {
                        return $record->images[0] ?? null;
                    }),

                Tables\Columns\TextColumn::make('title')
                    ->label('Nazwa')
                    ->description(function (LocalAttraction $record) {
                        return Str::limit(strip_tags($record->description), 40);
                    })
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListLocalAttractions::route('/'),
            'create' => Pages\CreateLocalAttraction::route('/create'),
            'edit' => Pages\EditLocalAttraction::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Lokalne Atrakcje');
    }
    public static function getPluralLabel(): string
    {
        return __('Lokalne Atrakcje');
    }

    public static function getLabel(): string
    {
        return __('Lokalna Atrakcja');
    }
}