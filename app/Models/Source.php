<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model {
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
     * Get the locations from this source.
     */
    public function locations() {
        return $this->belongsToMany(Location::class);
    }

    /**
     * Get the user that created or owns the record.
     */
    public function user() {
        return $this->belongsTo(User::class);
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

    /**
     * Scope a query to only include records with specific search parameters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInTeam($query, $team) {

        If (empty($team)) {
            return $query;
        } else {
            $LocationIds = Location::InTeam($team)->get()->pluck('id')->toArray();

            return $query->whereHas('locations', function ($q) use ($LocationIds) {
                $q->whereIn('locations.id', $LocationIds);
            });
        }
    }

    /**
     * Scope a query to only include records with specific search parameters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilterOut($query, $filter = '') {

        If (empty($filter)) {
            return $query;
        } else {
            If (!is_array($filter)) {
                $filter = array($filter);
            }
            return $query->whereNotIn('name', $filter);
        }

    }

}
