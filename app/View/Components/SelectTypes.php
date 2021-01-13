<?php

namespace App\View\Components;

use App\Models\Type;
use Illuminate\View\Component;

class SelectTypes extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '') {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select-types', [
            'types' => Type::orderBy('name', 'asc')->get(),
            'class' => $this->class
        ]);
    }
}
