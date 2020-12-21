<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    /**
     * Get the languages of the country.
     */
    public function countries() {
        return $this->belongsToMany(Country::class);
    }

    /**
     * Get the languages of the country.
     */
    public function area() {
        return $this->belongsTo(Country::class, 'area_id');
    }
}
