<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'road',
        'postcode',
        'part',
        'city',
        'state',
        'country_id',
        'user_id'
    ];

    /**
     * Get the country belonging to the address.
     */
    public function country() {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the coordinates for this address.
     */
    public function coordinate() {
        return $this->hasOne(Coordinate::class);
    }

    /**
     * Get Address in a String
     *
     * @return void
     */
    public function getAddressString() {

        $returnObject = '';

        If ($this->road) {
            $returnObject .= $this->road . ', ';
        }
        If ($this->postcode) {
            $returnObject .= $this->postcode . ', ';
        }
        If ($this->part) {
            $returnObject .= $this->part . ', ';
        }
        If ($this->city) {
            $returnObject .= $this->city . ', ';
        }
        If ($this->state) {
            $returnObject .= $this->state . ', ';
        }

        return substr($returnObject,0,-2);
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
                ->where('description', 'like', '%' . $search . '%')
                ->OrWhere('road', 'like', '%' . $search . '%')
                ->OrWhere('city', 'like', '%' . $search . '%')
                ->OrWhere('state', 'like', '%' . $search . '%')
                ->OrWhere('part', 'like', '%' . $search . '%');
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

        # TOCHECK
        Return $query;

    }

}
