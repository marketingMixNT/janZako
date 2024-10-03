<?php

namespace App\Filament\Resources\HomeContactPageResource\Pages;

use App\Filament\Resources\HomeContactPageResource;
use App\Models\HomeContactPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeContactPages extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeContactPageResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = HomeContactPage::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
