<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\JobRoleResource;

class EditJobRole extends EditRecord
{
    protected static string $resource = JobRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
