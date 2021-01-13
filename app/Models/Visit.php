<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends ModelWithTeams
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'user_id',
        'location_id',
        'visited_at',
        'story',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'visited_at' => 'date',
    ];

    /**
     * Get the location of the visit
     */
    public function location() {
        return $this->belongsTo(Location::class);
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
                ->where('story', 'like', '%' . $search . '%');
        }
    }

}
