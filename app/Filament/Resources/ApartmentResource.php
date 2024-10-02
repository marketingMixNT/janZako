<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Room;
use Filament\Tables;
use App\Models\Social;
use App\Models\Gallery;
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
use Filament\Forms\Components\Fieldset;
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



                        // MAIN INFO
                        Tabs\Tab::make('Główne informacje')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([

                                Forms\Components\FileUpload::make('logo')
                                    ->label('Logo')
                                    ->directory('apartments-logos')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartament-logo' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                                    )
                                    
                                    ->maxSize(8192)
                                  
                                    ->columnSpanFull()
                                    ->required(),


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
                                    ->hint('Przyjazny adres url który wygeneruje się automatycznie')
                                    ->readOnly(),

                                RichEditor::make('short_desc')
                                    ->label('Krótki opis')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                    ])
                                    ->required()
                                    ->placeholder('Pojawi się na stronie głównej oraz stronie apartamentów')
                                    ->columnSpanFull(),

                                Fieldset::make('Rezerwacja')
                                    ->schema([
                                        Forms\Components\TextInput::make('booking_link')
                                            ->label('Link do panelu rezerwacji')
                                            ->url()
                                            ->columnSpanFull()
                                            ->hint('Link jest inny dla wersji angielskiej!')
                                            ->required(),

                                        Forms\Components\TextInput::make('booking_script')
                                            ->label('Link do skryptu rezerwacyjnego')
                                            ->hint("Wpisz tylko link z src. Pamiętaj o usunięciu 'pl' tak jak w przykładzie poniżej. ")
                                            ->placeholder("https://wis.upperbooking.com/aparthoteljan/be-panel?locale=")
                                            ->minLength(3)
                                            ->maxLength(255)
                                            ->columnSpanFull()
                                            ->required(),
                                    ]),

                                Fieldset::make('Mapa')
                                    ->schema([
                                        Forms\Components\TextInput::make('map_link')
                                            ->label('Link do mapy google')
                                            ->url()
                                            ->columnSpanFull()
                                            ->required(),

                                        Forms\Components\Textarea::make('map')
                                            ->label('Google Maps iFrame')
                                            ->placeholder("<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.547169189393!2d20.00688517730142!3d49.474170357174515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e5905e21c0ed%3A0x159c133ae9b83572!2sMarketingMix!5e0!3m2!1spl!2spl!4v1727760651042!5m2!1spl!2spl' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade' title:'apartament-willa' class:'w-full'></iframe>")
                                            ->autosize()
                                            ->required()

                                            ->columnSpanFull(),



                                        Shout::make('so-important')
                                            ->content('Dodaj to mapy tagi: title:"nazwa-apartamentu" class:"w-full"')
                                            ->color('warning')
                                            ->columnSpanFull(),
                                    ])




                            ]),

                        // CONTACT
                        Tabs\Tab::make('Dane kontaktowe')
                            ->icon('heroicon-o-phone')
                            ->columns()
                            ->schema([

                                Forms\Components\TextInput::make('address')
                                    ->label('Adres')
                                    ->columnSpanFull()
                                    ->placeholder("Testowa 123, 123-34 Test")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\TextInput::make('phone')
                                    ->label('Telefon')
                                    ->prefix("+48")
                                    ->placeholder("123456789")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\TextInput::make('mail')
                                    ->label('Email')
                                    ->placeholder("test@gmail.com")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),

                                Fieldset::make('Social Media')
                                    ->schema([
                                        Repeater::make('socials')
                                            ->schema(Social::getForm())
                                            ->label('')
                                            ->relationship()
                                            ->columnSpanFull()
                                            ->itemLabel(fn(array $state): ?string => $state['name'] ?? null)
                                            ->addActionLabel('Dodaj social')
                                            ->collapsed()
                                            ->collapsible()
                                            ->grid(2)
                                            ->defaultItems(0)
                                    ])


                            ]),

                        // SLIDER
                        Tabs\Tab::make('Slider')
                            ->icon('heroicon-o-photo')
                            ->columns()
                            ->schema([
                                // Shout::make('info')
                                //     ->content('Wybierz zdjęcia oraz nagłówek który pojawi się na głównej stronie apartamentu')
                                //     ->type('info')
                                //     ->color('info')
                                //     ->columnSpanFull(),

                                Forms\Components\TextInput::make('slider_heading')
                                    ->label('Nagłówek')
                                    ->hint('Pojawi się pod nazwą apartamentu')
                                    ->placeholder('Twój wymarzony pobyt zaczyna się tutaj')
                                    ->unique(ignoreRecord: true)
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),


                                Fieldset::make('')
                                    ->schema([
                                        Forms\Components\FileUpload::make(name: 'slider_images')
                                            ->label('Zdjęcia')
                                            ->directory('apartment-slides')
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
                                    ])



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

                                    ->required(),

                                Forms\Components\TextArea::make('about_text_first')
                                    ->label('Paragraf')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()

                                    ->required(),

                                Forms\Components\TextArea::make('about_text_second')
                                    ->label('Paragraf 1')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()

                                    ->required(),


                                Fieldset::make('')
                                    ->schema([
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
                                    ])



                            ]),

                        // PHOTOS
                        Tabs\Tab::make('Zdjęcia')
                            ->icon('heroicon-o-camera')
                            ->columns()
                            ->schema([

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

                                Fieldset::make('')
                                    ->schema([
                                        Repeater::make('galleries')
                                            ->label('Galeria')
                                            ->schema(Gallery::getForm())
                                            ->relationship()
                                            ->columnSpanFull()
                                            ->itemLabel(fn(array $state): ?string => $state['category'] ?? null)
                                            ->addActionLabel('Dodaj do galerii')
                                            ->collapsed()
                                            ->collapsible()
                                            ->reorderable()
                                            ->grid(1)
                                            ->defaultItems(0)
                                    ])


                            ]),

                        // BANNERS
                        Tabs\Tab::make('Bannery')
                            ->icon('heroicon-o-window')
                            ->columns()
                            ->schema([

                                Forms\Components\FileUpload::make('banner_gallery')
                                    ->label('Strona galeria')
                                    ->directory('apartments-banners')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartment-banner' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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

                                Forms\Components\FileUpload::make('banner_contact')
                                    ->label('Strona kontakt')
                                    ->directory('apartments-banners')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartment-banner' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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

                                Forms\Components\FileUpload::make('banner_rooms')
                                    ->label('Strona pokoje')
                                    ->directory('apartments-banners')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'apartment-banner' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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

                        // ROOMS
                        Tabs\Tab::make('Pokoje')
                            ->icon('heroicon-o-home')
                            ->columns()
                            ->schema([
                                // Shout::make('info')
                                //     ->content('Dodaj nagłówek, paragraf oraz przypisz pokoje. Jeżeli chcesz stworzyć nowy pokój, odwiedź dedykowaną zakładkę.')
                                //     ->type('info')
                                //     ->color('info')
                                //     ->columnSpanFull(),

                                Forms\Components\TextInput::make('rooms_heading')
                                    ->label('Nagłówek')
                                    ->columnSpanFull()

                                    ->required(),

                                Forms\Components\TextArea::make('rooms_text')
                                    ->label('Paragraf')
                                    ->columnSpanFull()
                                    ->cols(5)
                                    ->autosize()

                                    ->required(),

                                Select::make('rooms')
                                    ->label('Pokoje')
                                    ->relationship('rooms', 'title') // Use the relationship and display the room title
                                    ->multiple() // Allows for multiple room selections
                                    ->preload() // Preload all values
                                    ->columnSpanFull()
                                    ->options(Room::whereNotNull('apartment_id')->pluck('title', 'id')) // Show only rooms that are assigned to an apartment
                                    ->disabled(), // Disable the select field to make it read-only


                            ]),

                        //TESTIMONIALS
                        Tabs\Tab::make('Opinie')
                            ->icon('heroicon-o-chat-bubble-oval-left')
                            ->columns()
                            ->schema([
                                // Shout::make('info')
                                //     ->content('Dodaj opinię zadowolonych gości.')
                                //     ->type('info')
                                //     ->color('info')
                                //     ->columnSpanFull(),
                                Fieldset::make('google')
                                    ->schema([
                                        Forms\Components\TextInput::make('google_reviews')
                                            ->label('Liczba opini w google')
                                            ->placeholder('452')
                                            ->numeric()
                                            ->required(),

                                        Forms\Components\TextInput::make('google_reviews_average')
                                            ->label('Średnia ocen')
                                            ->placeholder('4.6')
                                            ->numeric()
                                            ->required(),

                                        Forms\Components\TextInput::make('google_reviews_link')
                                            ->label('Link do wizytówki google')
                                            ->placeholder('https://maps.app.goo.gl/J68keyMP4o8iAR1C6')
                                            ->url()
                                            ->columnSpanFull()
                                            ->required(),
                                    ]),

                                Fieldset::make('TripAdvisor')
                                    ->schema([


                                        Forms\Components\TextInput::make('tripadvisor_reviews')
                                            ->label('Liczba opini w Trip Advisor')
                                            ->placeholder('452')
                                            ->numeric()
                                            ->required(),

                                        Forms\Components\TextInput::make('tripadvisor_reviews_average')
                                            ->label('Średnia ocen')
                                            ->placeholder('4.6')
                                            ->numeric()
                                            ->required(),

                                        Forms\Components\TextInput::make('tripadvisor_reviews_link')
                                            ->label('Link do Trip Advisor')
                                            ->placeholder('https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html')
                                            ->url()
                                            ->columnSpanFull()
                                            ->required(),
                                    ]),


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

                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Nazwa')
                    ->description(function (Apartment $record) {
                        return Str::limit(strip_tags($record->short_desc), 40);
                    })
                    ->searchable()
                    ->sortable(),
                 
                    Tables\Columns\TextColumn::make('rooms_count')
                    ->label('Liczba pokoi')
                    ->counts('rooms')
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
