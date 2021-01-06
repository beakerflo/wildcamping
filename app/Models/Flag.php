<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    use HasFactory;

    /**
     * Get the flag of the country.
     */
    public function country() {
        return $this->hasOne(Country::class);
    }

    /**
     * Get the correct svg with adjusted width.
     */
    public function SetSvgWidth($width = '') {
        if(empty($width)) {
            return $this->svg;
        } else {
            return str_replace('<svg ','<svg class="Svg' . $width . '" ', $this->svg);
        }
    }
}
