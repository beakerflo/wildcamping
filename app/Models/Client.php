<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'accessed_at' => 'date',
    ];

    /**
     * Get the user that uses this client.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

}
