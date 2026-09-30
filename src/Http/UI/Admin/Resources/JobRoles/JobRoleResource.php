<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobRoles;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\CreateJobRole;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\EditJobRole;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\ListJobRoles;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\ViewJobRole;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Schemas\JobRoleForm;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Schemas\JobRoleInfolist;
use Rimba\Position\Http\UI\Admin\Resources\JobRoles\Tables\JobRolesTable;
use Rimba\Position\Models\JobRole;
use UnitEnum;

class JobRoleResource extends Resource
{
    protected static ?string $model = JobRole::class;

    protected static string|UnitEnum|null $navigationGroup = 'Position';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 36;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return JobRoleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobRoleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobRolesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobRoles::route('/'),
            'create' => CreateJobRole::route('/create'),
            'view' => ViewJobRole::route('/{record}'),
            'edit' => EditJobRole::route('/{record}/edit'),
            //
        ];
    }
}
