<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    /**
     * Get the user that created the type.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the locations for this type.
     */
    public function locations() {
        return $this->hasMany(Type::class);
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
                ->OrWhere('description', 'like', '%' . $search . '%');
        }
    }

}
