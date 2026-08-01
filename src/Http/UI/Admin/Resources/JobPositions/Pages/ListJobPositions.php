<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\JobPositionResource;

class ListJobPositions extends ListRecords
{
    protected static string $resource = JobPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
