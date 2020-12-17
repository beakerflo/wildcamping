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
    ];

    /**
     * Get the locations for this coordinate.
     */
    public function locations() {
        return $this->hasMany(Location::class);
    }
}
