<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class What3words extends Model {

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'nl',
        'en',
        'fr',
        'de',
        'es'
    ];

    /**
     * Get the coordinates for this record.
     */
    public function coordinate() {
        return $this->hasOne(Coordinate::class,'what3words_id');
    }

}
