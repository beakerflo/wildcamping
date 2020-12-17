<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'private',
        'name',
        'description',
        'user_id',
        'type_id',
        'coordinate_id',
        'address_id',
    ];

    /**
     * Get the user that created the location.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the type of this location.
     */
    public function type() {
        return $this->belongsTo(Type::class);
    }

    /**
     * Get the coordinate of the location.
     */
    public function coordinate() {
        return $this->belongsTo(Coordinate::class);
    }

    /**
     * Get the address of the location.
     */
    public function address() {
        return $this->belongsTo(Address::class);
    }

    /**
     * Get the visits to this location.
     */
    public function visits() {
        return $this->hasMany(Visit::class);
    }

    /**
     * Get the images belonging to the location.
     */
    public function images() {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the comments on the location.
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the sources for the location.
     */
    public function sources() {
        return $this->belongsToMany(Source::class);
    }

    /**
     * Get the tags belonging to the location.
     */
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
