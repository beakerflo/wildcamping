<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    /**
     * Get the countries using this currency
     */
    public function countries() {
        return $this->hasMany(Country::class);
    }
}
