<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get the user that wrote the comment.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the location for this comment.
     */
    public function location() {
        return $this->belongsTo(Location::class);
    }
}
