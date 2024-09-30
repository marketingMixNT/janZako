<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Apartment;
use Filament\Tables\Table;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Tabs;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Component;
use Filament\Support\Enums\IconPosition;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\ApartmentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;



use App\Filament\Resources\ApartmentResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class ApartmentResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Apartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Apartamenty';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([

                        // SLIDER
                        Tabs\Tab::make('Slider')
                            ->icon('heroicon-o-photo')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Wybierz zdjęcia oraz nagłówek który pojawi się na głównej stronie apartamentu')
                                    ->type('info')
                                    ->color('info')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('slider_heading')
                                    ->label('Nagłówek')
                                    ->hint('Pojawi się pod nazwą apartamentu')
                                    ->placeholder('np. Twój wymarzony pobyt zaczyna się tutaj')
                                    ->unique(ignoreRecord: true)
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\FileUpload::make(name: 'slider_images')
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

                            ]),

                        // MAIN INFO
                        Tabs\Tab::make('Główne informacje')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Nazwa Apartamentu')
                                    ->unique(ignoreRecord: true)
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required()
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                                    ->readOnly(),

                                    // Repeater::make('socials')
                                    // ->label('Social Media')
                                    // // ->schema(Social::getForm())
                                    // ->relationship()
                                    // ->columnSpanFull()
                                    // ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    // ->addActionLabel('Dodaj social')
                                    // ->collapsed()
                                    // ->collapsible()
                                    // ->grid(2)
                                    // ->defaultItems(0)
                            ]),

                        // ABOUT
                        Tabs\Tab::make('O nas')
                            ->icon('heroicon-o-user')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Dodaj tekst oraz zdjęcia które pojawią się w sekcji o nas')
                                    ->type('info')
                                    ->color('info')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('about_heading')
                                    ->label('Nagłówek')
                                    ->columnSpanFull()
                                    ->placeholder('np. Gościnność i wygoda na starym mieście')
                                    ->required(),

                                Forms\Components\TextArea::make('about_text')
                                    ->label('Paragraf')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()
                                    ->placeholder('np. Nasze apartamenty to połączenie elegancji i komfortu, zlokalizowane w samym sercu Krakowa. Każdy z nich urządzony jest z dbałością o szczegóły, aby zapewnić naszym gościom wyjątkowy pobyt. Z okien roztacza się widok na zabytkowe uliczki, a bliskość Rynku Głównego sprawia, że Kraków jest na wyciągnięcie ręki. Oferujemy przestrzeń do relaksu, nowoczesne udogodnienia oraz prawdziwą krakowską atmosferę.')
                                    ->required(),

                                Forms\Components\TextArea::make('about_text')
                                    ->label('Paragraf 1')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()
                                    ->placeholder('np. Hotel Jan to połączenie historii i nowoczesności. Mieści się w zabytkowej, 600-letniej kamienicy, oferując gościom wyjątkowy klimat Starego Miasta oraz wygodę dostosowaną do współczesnych potrzeb. Nasz hotel znajduje się zaledwie 50 metrów od Rynku Głównego.')
                                    ->required(),

                                Forms\Components\TextArea::make('about_text_second')
                                    ->label('Paragraf 2')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()
                                    ->placeholder('np. Oferujemy komfortowe pokoje, przestronne lobby i oranżerię, w której serwujemy śniadania. Nasza obsługa działa 24/7, aby zapewnić naszym gościom pełną satysfakcję i komfortowy pobyt w samym sercu Krakowa.')
                                    ->required(),

                                Forms\Components\FileUpload::make(name: 'about_images')
                                    ->label('Zdjęcia')
                                    ->directory('apartment-about')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartementy-jan-o-nas-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                    )
                                    ->multiple()
                                    ->appendFiles()
                                    ->image()
                                    ->reorderable()
                                    ->hint("Dodaj dwa zdjęcia")
                                    ->maxSize(8192)
                                    ->optimize('webp')
                                    ->imageEditor()
                                    ->maxFiles(2)
                                    ->minFiles(2)
                                    ->panelLayout('grid')
                                    ->imageEditorAspectRatios([
                                        null,
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),

                            ]),

                        // CONTENT
                        Tabs\Tab::make('Opis')
                            ->icon('heroicon-o-pencil-square')
                            ->columns()
                            ->schema([

                                RichEditor::make('desc')
                                    ->label('Opis główny')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'bulletList',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->required()
                                    ->placeholder('Pojawi się na stronie apartamentu')
                                    ->columnSpanFull(),
                            ]),

                        // PHOTOS
                        Tabs\Tab::make('Zdjęcia')
                            ->icon('heroicon-o-camera')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Tytuł oraz opis zostaną uzupełnione automatycznie jezeli ich nie podasz. Zachecamy jednak do zrobienia tego w celu lepszej optymalizacji')
                                    ->type('info')
                                    ->color('success')
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Miniaturka')
                                    ->directory('apartments-thumbnails')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartment-miniaturka' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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
                                Forms\Components\FileUpload::make('gallery')
                                    ->label('Galeria')
                                    ->directory('apartments-galleries')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartament-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                    )
                                    ->multiple()
                                    ->appendFiles()
                                    ->image()
                                    ->reorderable()
                                    ->hint('Galeria musi mieć co najmniej 4 zdjęcia')
                                    ->maxSize(8192)
                                    ->optimize('webp')
                                    ->imageEditor()
                                    ->minFiles(4)
                                    ->maxFiles(16)
                                    ->panelLayout('grid')
                                    ->imageEditorAspectRatios([
                                        null,
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->required()

                                    ->columnSpanFull(),
                            ]),

                        // ROOMS
                        Tabs\Tab::make('Pokoje')
                            ->icon('heroicon-o-home')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Dodaj nagłówek, paragraf oraz przypisz pokoje.')
                                    ->type('info')
                                    ->color('info')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('rooms_heading')
                                    ->label('Nagłówek')
                                    ->columnSpanFull()
                                    ->placeholder('np. Gościnność i wygoda na starym mieście')
                                    ->required(),

                                Forms\Components\TextArea::make('rooms_text')
                                    ->label('Paragraf')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()
                                    ->placeholder('np. Nasze apartamenty to połączenie elegancji i komfortu, zlokalizowane w samym sercu Krakowa. Każdy z nich urządzony jest z dbałością o szczegóły, aby zapewnić naszym gościom wyjątkowy pobyt. Z okien roztacza się widok na zabytkowe uliczki, a bliskość Rynku Głównego sprawia, że Kraków jest na wyciągnięcie ręki. Oferujemy przestrzeń do relaksu, nowoczesne udogodnienia oraz prawdziwą krakowską atmosferę.')
                                    ->required(),

                                Select::make('apartment_id')
                                    ->label('Pokoje')
                                    ->relationship('rooms', 'title',)
                                    ->multiple()
                                    ->preload()
                                    ->searchable()
                                    ->required()
                                    ->columnSpanFull()
                                    ->placeholder('Mozesz wybrac kilka'),


                            ]),

                        // TESTIMONIALS
                        Tabs\Tab::make('Opinie')
                            ->icon('heroicon-o-chat-bubble-oval-left')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Dodaj opinię zadowolonych gości.')
                                    ->type('info')
                                    ->color('info')
                                    ->columnSpanFull(),
                                Repeater::make('testimonials')
                                    ->label('Opinie')
                                    ->schema(Testimonial::getForm())
                                    ->relationship()
                                    ->columnSpanFull()
                                    ->itemLabel(fn(array $state): ?string => $state['name'] ?? null)
                                    ->addActionLabel('Dodaj opinię')
                                    ->collapsed()
                                    ->collapsible()
                                    ->grid(1)
                                    ->reorderable()
                                    ->defaultItems(0)
                            ]),

                        // META
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
            ->reorderable('sort')
            ->defaultSort('sort', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Nazwa')
                    ->description(function (Apartment $record) {
                        return Str::limit(strip_tags($record->desc), 40);
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
            'index' => Pages\ListApartments::route('/'),
            'create' => Pages\CreateApartment::route('/create'),
            'edit' => Pages\EditApartment::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Apartamenty');
    }
    public static function getPluralLabel(): string
    {
        return ('Apartamenty');
    }

    public static function getLabel(): string
    {
        return ('Apartament');
    }
}
