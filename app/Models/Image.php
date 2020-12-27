<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'extension',
        'name',
        'filename',
        'user_id',
        'location_id',
    ];

    /**
     * Get the user that uploaded the image.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the location for this image.
     */
    public function location() {
        return $this->belongsTo(Location::class);
    }
    
}
