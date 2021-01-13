<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    /**
     * Get the regions of the continent
     */
    public function regions() {
        return $this->hasMany(Region::class);
    }

}
