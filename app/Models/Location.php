<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends ModelWithTeams {
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
        'coordinate_id'
    ];

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
     * Get the favorites of the locations.
     */
    public function favorite() {
        return $this->hasMany(Favorite::class);
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

    /**
     * Check if the location is a favorite
     */
    public function isFavorite() {
        if ($this->favorite->count() == 0) {
            return FALSE;
        } elseif ($this->favorite->count() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Check if the location is private
     */
    public function isPrivate() {
        if ($this->private == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Get the visit count on this location.
     */
    public function visitCount() {
        return number_format($this->Visits->count(),0,",",".");
    }

    /**
     * Get the visit count on this location.
     */
    public function imageCount() {
        return number_format($this->Images->count(),0,",",".");
    }

    /**
     * Check if address exists or change flag for question mark
     *
     */
    public function getFlag($size = '') {
        if($this->coordinate->address) {
            return $this->coordinate->address->country->flag->ofSize($size)->svg;
        } else {
            return Svg::OfSubject('unknown')->first()->ofSize($size)->svg;
        }
    }

    /**
     * Retrieve DMS format if coordinates are set
     *
     */
    public function withDmsFormat() {
        If ($this->coordinate) {
            $this->coordinate->withDmsFormat();

            return $this;
        } else {
            return $this;
        }
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
                ->Orwhere('description', 'like', '%' . $search . '%');
        }
    }

    /**
     * Scope a query to only include records that are favorited.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFavorites($query) {
        return $query
            ->whereIn('id', Favorite::all()->pluck('location_id')->toArray());
    }

    /**
     * Scope a query from a specific source
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFromSource($query, $source) {
        if(empty($source)) {
            return $query;
        } else {
            return $query
                ->whereHas('sources', function ($q) use ($source) {
                    $q->where('name', $source);
            });
        }
    }

    /**
     * Scope a query of a specific type
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfType($query, $type) {
        if(empty($type)) {
            return $query;
        } else {
            return $query
                ->whereHas('type', function ($q) use ($type) {
                    $q->where('name', $type);
            });
        }
    }

}
