<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class svg extends Model {

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'subject',
        'svg'
    ];

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

    /**
     * Set the preffed class in class
     */
    public function withClass($class = '') {

        If ($this == null) {
            return null;
        }

        If (empty($class)) {
            return $this;
        }

        if (str_contains($this->svg, $class)) {
            return $this;
        } elseif (str_contains($this->svg, ' class=')) {
            $this->svg = str_replace(' class="', ' class="' . $class . ' ', $this->svg);
        } else {
            $this->svg = str_replace('<svg fill', '<svg class="' . $class . '" fill', $this->svg);
        }

        return $this;
    }

    /**
     * Scope a query to only include the one with the name
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfSubject($query, $subject) {
        if(empty($subject)) {
            return $query;
        } else {
            return $query
                ->where('subject', $subject);
        }
    }
}
