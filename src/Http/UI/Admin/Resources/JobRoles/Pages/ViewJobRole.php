<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\JobRoleResource;

class ViewJobRole extends ViewRecord
{
    protected static string $resource = JobRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
