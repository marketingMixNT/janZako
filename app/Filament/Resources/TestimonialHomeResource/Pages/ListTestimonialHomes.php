<?php

namespace App\Filament\Resources\TestimonialHomeResource\Pages;

use App\Filament\Resources\TestimonialHomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialHomes extends ListRecords
{
    protected static string $resource = TestimonialHomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
