<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        // 'category', // if you added category to the table
    ];

    /**
     * The properties that have this rule.
     */
    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_rule')->withTimestamps();
    }
}
