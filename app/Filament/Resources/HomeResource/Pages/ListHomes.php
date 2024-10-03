<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use App\Models\Home;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomes extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeResource::class;

    
    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = Home::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
