<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /**
     * Get the user that created the type.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the locations for this type.
     */
    public function locations() {
        return $this->hasMany(Type::class);
    }

}
