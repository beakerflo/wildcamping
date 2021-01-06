<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'name',
        'link',
        'description',
        'user_id',
    ];

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

    /**
     * Get the location count registered by this source.
     */
    public function locationCount() {
        return number_format($this->locations->count(),0,",",".");
    }

    /**
     * Scope a query to only include records with specific search parameters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        if(empty($search)) {
            return $query;
        } else {
            return $query
                ->where('name', 'like', '%' . $search . '%')
                ->Orwhere('link', 'like', '%' . $search . '%')
                ->Orwhere('description', 'like', '%' . $search . '%');
        }
    }
}
