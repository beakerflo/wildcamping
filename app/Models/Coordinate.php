<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'latitude',
        'longitude',
        'map_id',
        'address_id'
    ];

    /**
     * Get the locations for this coordinate.
     */
    public function address() {
        return $this->belongsTo(Address::class);
    }

    /**
     * Get the map of the coordinates
     */
    public function map() {
        return $this->belongsTo(Image::class, 'map_id');
    }
}
