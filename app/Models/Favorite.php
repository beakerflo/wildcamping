<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends ModelWithTeams {

    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'user_id',
        'location_id'
    ];

    /**
     * Get the location that is favorited.
     */
    public function location() {
        return $this->belongsTo(Location::class);
    }

}
