<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'filename',
        'zoom',
        'coordinate_id',
        'address_id'
    ];

    /**
     * Get the coordinate of the map
     */
    public function coordinate() {
        return $this->belongsTo(Coordinate::class);
    }
}
