<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'location_id',
        'owner_id',
        'description',
        'price',
    ];

    /**
     * Get the owner of the property.
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Get the location of the property.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * The facilities that belong to the property.
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class, 'facility_property')->withTimestamps();
    }

    /**
     * The categories that belong to the property.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PropertyCategory::class, 'property_property_category')
                    ->withPivot('details')
                    ->withTimestamps();
    }

    /**
     * Get the rooms for the property.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Get the images for the property.
     */
    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class);
    }

    /**
     * The rules that apply to the property.
     */
    public function rules(): BelongsToMany
    {
        return $this->belongsToMany(Rule::class, 'property_rule')->withTimestamps();
    }

    /**
     * The rental periods offered for the property.
     */
    public function rentalPeriods(): BelongsToMany
    {
        return $this->belongsToMany(RentalPeriod::class, 'property_rental_period')->withTimestamps();
    }

    // Relationships for rules, rental_periods will be added later
}
