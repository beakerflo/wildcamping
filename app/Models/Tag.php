<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'name',
        'user_id',
    ];

    /**
     * Get the locations for this tag.
     */
    public function locations() {
        return $this->belongsToMany(Location::class);
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
                ->where('name', 'like', '%' . $search . '%');
        }
    }

}
