<?php

namespace App\Filament\Resources\AlbumsResource\Pages;

use App\Filament\Resources\AlbumsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlbums extends ListRecords
{
    protected static string $resource = AlbumsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
