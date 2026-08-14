<?php

declare(strict_types=1);

namespace Rimba\Position\Http\UI\Admin\Resources\JobPositions;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\CreateJobPosition;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\EditJobPosition;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\ListJobPositions;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\ViewJobPosition;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Schemas\JobPositionForm;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Schemas\JobPositionInfolist;
use Rimba\Position\Http\UI\Admin\Resources\JobPositions\Tables\JobPositionsTable;
use Rimba\Position\Models\JobPosition;
use UnitEnum;

class JobPositionResource extends Resource
{
    protected static ?string $model = JobPosition::class;

    protected static string|UnitEnum|null $navigationGroup = 'Position';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ArrowSmallRight;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return JobPositionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobPositionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobPositionsTable::configure($table);
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
            'index' => ListJobPositions::route('/'),
            'create' => CreateJobPosition::route('/create'),
            'view' => ViewJobPosition::route('/{record}'),
            'edit' => EditJobPosition::route('/{record}/edit'),
        ];
    }
}
