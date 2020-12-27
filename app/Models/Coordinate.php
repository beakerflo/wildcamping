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
     * Get the maps of the coordinates
     */
    public function maps() {
        return $this->hasMany(Map::class);
    }

    /**
     * Get the location using these coordinates
     */
    public function locations() {
        return $this->hasMany(Location::class);
    }
}
