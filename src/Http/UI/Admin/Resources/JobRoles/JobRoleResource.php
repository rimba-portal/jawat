<?php

namespace Rimba\Position\Http\UI\Admin\Resources\JobRoles;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JobRoleResource extends Resource
{
    protected static ?string $model = \Rimba\Position\Models\JobRole::class;

    protected static string|UnitEnum|null $navigationGroup = 'Position';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 36;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema { return \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Schemas\JobRoleForm::configure($schema); }

    public static function infolist(Schema $schema): Schema { return \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Schemas\JobRoleInfolist::configure($schema); }

    public static function table(Table $table): Table { return \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Tables\JobRolesTable::configure($table); }

    public static function getRelations(): array 
    { 
        return [ 
            // 
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\ListJobRoles::route('/'),
             'create' => \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\CreateJobRole::route('/create'),
             'view' => \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\ViewJobRole::route('/{record}'),
             'edit' => \Rimba\Position\Http\UI\Admin\Resources\JobRoles\Pages\EditJobRole::route('/{record}/edit'),
            //
        ];
    }
}
