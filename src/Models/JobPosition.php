<?php

declare(strict_types=1);

namespace Rimba\Position\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Rimba\Agreement\Models\Agreement;
use Rimba\Attributing\Traits\HasPersonAttributes;
use Rimba\Organization\Models\OrgUnit;
use Rimba\People\Models\Staff;
use Rimba\People\Models\StaffPosition;

#[Fillable([
    'job_contract_id',
    'org_unit_id',
    'level',
    'status',
    'title',
    'description',
    'attributes',
])]
class JobPosition extends Model
{
    use HasFactory;
    use HasPersonAttributes;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'job_contract_id' => 'integer',
            'org_unit_id' => 'integer',
            'attributes' => 'array',
        ];
    }

    public function staffPositions(): HasMany
    {
        return $this->hasMany(StaffPosition::class);
    }

    public function staffs(): BelongsToMany
    {
        return $this->belongsToMany(
            Staff::class,
            'staff_positions'
        );
    }

    public function agreement(): BelongsTo
    {
        return $this->belongsTo(Agreement::class);
    }

    public function occupants()
    {
        return $this->staffs()
            ->whereHas(
                'staffPositions',
                fn ($q) => $q
                    ->where('job_position_id', $this->id)
                    ->where('status', 'active')
            );
    }

    public function orgUnit(): BelongsTo
    {
        return $this->belongsTo(OrgUnit::class);
    }
}
