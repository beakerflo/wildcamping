<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NearPlace extends Model {
    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the coordinates for this record.
     */
    public function coordinate() {
        return $this->hasOne(Coordinate::class);
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
                ->where('name', 'like', '%' . $search . '%');
        }
    }

}
