<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PropertyCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * The properties that belong to the category.
     */
    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_property_category')
                    ->withPivot('details')
                    ->withTimestamps();
    }
}
