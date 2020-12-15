<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    /**
     * Get the user created the source.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the locations from this source.
     */
    public function locations() {
        return $this->belongsToMany(Location::class);
    }

}
