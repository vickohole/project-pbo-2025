<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Admin\Resources\ProductResource;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;
}
