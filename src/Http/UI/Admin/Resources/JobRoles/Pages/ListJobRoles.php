<?php

namespace Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJobRoles extends ListRecords
{
    protected static string $resource = \Rimba\Position\Http\UI\Admin\Resources\JobRoles\JobRoleResource::class;

    protected static ?string $title = 'Functional Job Roles';

    protected ?string $subheading = 'Define distinct technical or business skill profiles across the organization.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
