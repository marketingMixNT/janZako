<?php

namespace App\Filament\Resources\CtaResource\Pages;

use App\Filament\Resources\CtaResource;
use App\Models\Cta;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCtas extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = CtaResource::class;

    protected function getHeaderActions(): array
    {
       
        $privacyPolicyExists = Cta::exists();

        return array_filter([
           
            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
