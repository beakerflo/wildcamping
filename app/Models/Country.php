<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * Get the addresses from the country
     */
    public function addresses() {
        return $this->hasMany(Address::class);
    }

    /**
     * Get the region of this country.
     */
    public function region() {
        return $this->belongsTo(Region::class);
    }

    /**
     * Get the currency of the country.
     */
    public function currency() {
        return $this->belongsTo(Currency::class);
    }

    /**
     * Get the languages of the country.
     */
    public function languages() {
        return $this->belongsToMany(Language::class);
    }

    /**
     * Get the flag of the country.
     */
    public function flag() {
        return $this->belongsTo(Flag::class);
    }

}
