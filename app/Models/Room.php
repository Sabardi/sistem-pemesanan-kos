<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'room_number',
        'is_available',
        // 'name', 
        // 'description',
        // 'price',
    ];

    /**
     * Get the property that owns the room.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
