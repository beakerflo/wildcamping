<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * Get the countries for this region.
     */
    public function countries() {
        return $this->hasMany(Country::class);
    }

    /**
     * Get the content where the region belongs to.
     */
    public function continent() {
        return $this->belongsTo(Continent::class);
    }
}
