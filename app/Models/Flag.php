<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    /**
     * Get the flag of the country.
     */
    public function country() {
        return $this->hasOne(Country::class);
    }

    /**
     * Set the correct size in class
     */
    public function ofSize($size = 4) {
        $class = 'w-' . $size . ' h-' . $size;

        if (str_contains($this->svg,'w-')) {
            return $this;
        } elseif (str_contains($this->svg,'class=')) {
            $this->svg = str_replace('class="', 'class="' . $class . ' ', $this->svg);
        } else {
            $this->svg = str_replace('<svg ', '<svg class="' . $class . '" ', $this->svg);
        }

        return $this;
    }
}
