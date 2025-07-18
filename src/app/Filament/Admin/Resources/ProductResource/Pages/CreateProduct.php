<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\ProductResource;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}
