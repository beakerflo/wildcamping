<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coordinate extends Model
{
    use HasFactory;

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

    protected $appends = ['distance'];

    /**
     * Get the locations for this coordinate.
     */
    public function address() {
        return $this->belongsTo(Address::class);
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
     * Get the closest locations
     */
    public static function nearby($lat, $lon, $distance=50) {

        $result = DB::table('coordinates')
            ->select(DB::raw('id, (6371 * acos (cos ( radians(' . $lat . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $lon . ') ) + sin ( radians(' . $lat . ') ) * sin( radians( latitude ) ))) AS distance'))
            ->having('distance', '<', 50)
            ->orderBy('distance', 'asc')
            ->get();

        $collection = Coordinate::where('id', 0)->get();
        ForEach($result as $coordinate) {
            $obj = Coordinate::where('id', $coordinate->id)->get()->first();
            $obj->distance = $coordinate->distance;
            $collection->push($obj);
        }
        
        return $collection;
    }
}
