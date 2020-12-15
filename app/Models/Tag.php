<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Get the user that created the tag.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the locations for this tag.
     */
    public function locations() {
        return $this->belongsToMany(Location::class);
    }

}
