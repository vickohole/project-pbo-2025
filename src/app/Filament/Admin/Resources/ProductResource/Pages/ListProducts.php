<?php
namespace App\Filament\Admin\Resources\ProductResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use App\Filament\Admin\Resources\ProductResource;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

       protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}




