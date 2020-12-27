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
     * Get area where the language is spoken
     */
    public function area() {
        return $this->belongsTo(Country::class, 'area_id');
    }
}
