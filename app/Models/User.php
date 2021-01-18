<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

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
        'two_factor_recovery_codes',
        'two_factor_secret',
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

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
     * Get the favorites of the user.
     */
    public function favorites() {
        return $this->hasMany(Favorite::class);
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
     * Get the team names of allTeams
     */
    public function allTeamNames() {
        return $this->allTeams()->pluck('name')->toArray();
    }

}
