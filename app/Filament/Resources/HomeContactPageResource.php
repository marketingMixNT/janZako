<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\HomeContactPage;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Tabs;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeContactPageResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;
use App\Filament\Resources\HomeContactPageResource\RelationManagers;


class HomeContactPageResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }

    protected static ?string $model = HomeContactPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Strona główna';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([


            Tabs::make('Tabs')
                ->columnSpanFull()
                ->tabs([
                    Tabs\Tab::make('Treść')
                        ->icon('heroicon-o-pencil-square')
                        ->columns()
                        ->schema([

                            Forms\Components\FileUpload::make('banner')
                                ->label('Banner')
                                ->directory('home-banner')
                                ->getUploadedFileNameForStorageUsing(
                                    fn(TemporaryUploadedFile $file): string => 'apartamenty-banner-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                                )
                                ->image()
                                ->maxSize(8192)
                                ->optimize('webp')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->required()
                                ->columnSpanFull(),

                        ]),

                    Tabs\Tab::make('Meta')
                        ->icon('heroicon-o-globe-alt')
                        ->columns()
                        ->schema([
                            Shout::make('info')
                                ->content('Tytuł oraz opis zostaną uzupełnione automatycznie jezeli ich nie podasz. Zachecamy jednak do zrobienia tego w celu lepszej optymalizacji')
                                ->type('info')
                                ->color('success')
                                ->columnSpanFull(),

                            TextInput::make('meta_title')
                                ->label('Tytuł Meta')
                                ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                                ->characterLimit(60)
                                ->minLength(10)
                                ->maxLength(75)
                                ->live(debounce: 1000)
                                ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                    $validate = $livewire->validateOnly($component->getStatePath());
                                })
                                ->columnSpanFull(),

                            TextInput::make('meta_desc')
                                ->label('Opis Meta')
                                ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                                ->characterLimit(160)
                                ->minLength(10)
                                ->maxLength(180)
                                ->live(debounce: 1000)
                                ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                    $validate = $livewire->validateOnly($component->getStatePath());
                                })
                                ->columnSpanFull(),
                        ]),

                ]),





        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('banner')
                ->label('Banner'),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('heading')
                ->label('Nazwa')
                ->description(function (HomeContactPage $record) {
                    return Str::limit(strip_tags($record->text), 40);
                })
                ->searchable()
                ->sortable(),
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
            'index' => Pages\ListHomeContactPages::route('/'),
            'create' => Pages\CreateHomeContactPage::route('/create'),
            'edit' => Pages\EditHomeContactPage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Strona Kontakt');
    }
    public static function getPluralLabel(): string
    {
        return ('Strona Kontakt');
    }

    public static function getLabel(): string
    {
        return ('Strona Kontakt');
    }
}
