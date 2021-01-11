<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Svg extends Model {

    /**
     * Fillable fields of this model
     *
     */
    protected $fillable = [
        'subject',
        'code'
    ];

    /**
     * Set the correct size in class
     */
    public function ofSize($size = 4) {
        $class = 'w-' . $size . ' h-' . $size;

        if (str_contains($this->code, 'w-')) {
            return $this;
        } elseif (str_contains($this->code,'class=')) {
            $this->code = str_replace('class="', 'class="' . $class . ' ', $this->code);
        } else {
            $this->code = str_replace('<svg ', '<svg class="' . $class . '" ', $this->code);
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

        if (str_contains($this->code, $class)) {
            return $this;
        } elseif (str_contains($this->code, ' class=')) {
            $this->code = str_replace(' class="', ' class="' . $class . ' ', $this->code);
        } else {
            $this->code = str_replace('<svg fill', '<svg class="' . $class . '" fill', $this->code);
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
