<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelWithTeams extends Model
{
    /**
     * Get the user that created or owns the record.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the teams where this source is favorited in.
     */
    public function teams() {
        return $this->belongsToMany(Team::class);
    }

    /**
     * Scope a query to only include records with specific search parameters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInTeam($query, $team) {
        if(empty($team)) {
            return $query;
        } elseif (is_array($team)) {
            return $query
                ->whereHas('teams', function ($q) use ($team) {
                    $q->whereIn('name', $team);
            });
        } else {
            return $query
                ->whereHas('teams', function ($q) use ($team) {
                    $q->where('name', $team);
            });
        }
    }

}
