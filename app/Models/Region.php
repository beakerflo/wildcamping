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

    /**
     * Scope a query to only include records with specific search parameters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        if(empty($search)) {
            return $query;
        } else {
            return $query
                ->where('name', 'like', '%' . $search . '%')
                ->OrWhere('name_nl', 'like', '%' . $search . '%');
        }
    }

}
