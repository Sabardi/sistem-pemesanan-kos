<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'regency',
        'district',
        'village',
        'address_line',
        'postal_code',
        'latitude',
        'longitude',
    ];

    /**
     * Get the properties associated with the location.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
