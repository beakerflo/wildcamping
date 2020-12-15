<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the clients used by the user.
     */
    public function clients() {
        return $this->hasMany(Client::class);
    }

    /**
     * Get the images uploaded by the user.
     */
    public function images() {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the locations created by the user.
     */
    public function locations() {
        return $this->hasMany(Location::class);
    }

    /**
     * Get the sources used by the user.
     */
    public function sources() {
        return $this->hasMany(Location::class);
    }

    /**
     * Get the tags created by the user.
     */
    public function tags() {
        return $this->hasMany(Tag::class);
    }

    /**
     * Get the types created by the user.
     */
    public function types() {
        return $this->hasMany(Type::class);
    }

    /**
     * Get the visits created by the user.
     */
    public function visits() {
        return $this->hasMany(Visit::class);
    }

    /**
     * Get the groups of the user.
     */
    public function groups() {
        return $this->belongsToMany(Group::class);
    }
}
