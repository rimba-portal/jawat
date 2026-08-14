<?php

declare(strict_types=1);

namespace Rimba\Position\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Rimba\Attributing\Traits\HasPersonAttributes;
use Rimba\Hrm\Models\JobTitle;
use Rimba\Organization\Models\OrgUnit;

#[Fillable([
    'uuid',
    'job_title_id',
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

    public function jobTitle(): BelongsTo
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function orgUnit(): BelongsTo
    {
        return $this->belongsTo(OrgUnit::class);
    }
}
