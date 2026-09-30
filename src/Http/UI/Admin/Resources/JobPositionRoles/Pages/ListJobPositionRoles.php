<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles\JobPositionRoleResource;

class ListJobPositionRoles extends ListRecords
{
    protected static string $resource = JobPositionRoleResource::class;

    protected static ?string $title = 'Position Matrix Roles';

    protected ?string $subheading = 'Link individual operational roles directly to active job positions.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
