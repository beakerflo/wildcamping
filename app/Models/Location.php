<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        'coordinate_id'
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
    public function getFlagSvg($width = '') {
        if($this->coordinate->address) {
            return $this->coordinate->address->country->flag->SetSvgWidth($width);
        } else {
            $unknown = '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
            if(empty($width)) {
                return $unknown;
            } else {
                return str_replace('<svg ','<svg class="Svg' . $width . '" ', $unknown);
            }
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
