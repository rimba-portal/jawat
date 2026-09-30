<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles\Pages\ListJobPositionRoles;
use Rimba\Position\Models\JobPositionRole;
use UnitEnum;

class JobPositionRoleResource extends Resource
{
    protected static ?string $model = JobPositionRole::class;

    protected static string|UnitEnum|null $navigationGroup = 'Position';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 35;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([]);
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
            'index' => ListJobPositionRoles::route('/'),
            // 'create' => \Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles\Pages\CreateJobPositionRole::route('/create'),
            // 'view' => \Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles\Pages\ViewJobPositionRole::route('/{record}'),
            // 'edit' => \Rimba\Position\Http\UI\Admin\Resources\JobPositionRoles\Pages\EditJobPositionRole::route('/{record}/edit'),
            //
        ];
    }
}
