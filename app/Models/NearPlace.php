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
}
