<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'postal',
        'city',
        'country_id',
        'user_id'
    ];

    /**
     * Get the country belonging to the address.
     */
    public function country() {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the locations for this address.
     */
    public function locations() {
        return $this->hasMany(Location::class);
    }

}
