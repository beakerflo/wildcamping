<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'latitude',
        'longitude',
        'map_id',
        'address_id'
    ];

    /**
     * Get the locations for this coordinate.
     */
    public function address() {
        return $this->belongsTo(Address::class);
    }

    /**
     * Get the locations for this coordinate.
     */
    public function what3words() {
        return $this->belongsTo(What3words::class,'what3words_id');
    }

    /**
     * Get the locations for this coordinate.
     */
    public function nearPlace() {
        return $this->belongsTo(NearPlace::class);
    }

    /**
     * Get the maps of the coordinates
     */
    public function maps() {
        return $this->hasMany(Map::class);
    }

    /**
     * Get the location using these coordinates
     */
    public function locations() {
        return $this->hasMany(Location::class);
    }

    /**
     * Calculate DMS from a single coordinate
     */
    private static function calculateDMS($type, $gps) {
        if ($gps < 0 and $type == 'lat') {
            $hem = 'S';
        } elseif ($type == 'lat') {
            $hem = 'N';
        }

        if ($gps < 0 and $type == 'lng') {
            $hem = 'W';
        } elseif ($type == 'lng') {
            $hem = 'E';
        }

        $output = array();
        for ($x = 0; $x < 3; $x++) {
            if($x == 2) {
                array_push($output, $gps);
            } else {
                $vartmp = explode('.', $gps);
                array_push($output, $vartmp[0]);
                $gps = ("0." . $vartmp[1]) *60;
            }
        }
        return ($output[0] . "°" . $output[1] . "'" . $output[2] . '"' . $hem);
    }

    /**
     * Convert GPS to DMS
     */
    public function withDmsFormat() {

        if ($this->latitude and $this->longitude) {
            $this->latitude_dms = $this->calculateDMS('lat', $this->latitude);
            $this->longitude_dms = $this->calculateDMS('lng', $this->longitude);

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
    public function scopeInTeam($query, $team) {

        # TOCHECK
        Return $query;

    }

}
