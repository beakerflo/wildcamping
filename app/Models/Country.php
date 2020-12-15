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
}
