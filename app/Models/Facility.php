<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
    ];

    /**
     * The properties that belong to the facility.
     */
    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'facility_property');
    }
}
