<?php

namespace Rimba\Position\Http\UI\Admin\Resources\JobPositions;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JobPositionResource extends Resource
{
    protected static ?string $model = \Rimba\Position\Models\JobPosition::class;

    protected static string|UnitEnum|null $navigationGroup = 'Position';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 34;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema { return \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Schemas\JobPositionForm::configure($schema); }

    public static function infolist(Schema $schema): Schema { return \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Schemas\JobPositionInfolist::configure($schema); }

    public static function table(Table $table): Table { return \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Tables\JobPositionsTable::configure($table); }

    public static function getRelations(): array 
    { 
        return [ 
            // 
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\ListJobPositions::route('/'),
             'create' => \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\CreateJobPosition::route('/create'),
             'view' => \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\ViewJobPosition::route('/{record}'),
             'edit' => \Rimba\Position\Http\UI\Admin\Resources\JobPositions\Pages\EditJobPosition::route('/{record}/edit'),
            //
        ];
    }
}
