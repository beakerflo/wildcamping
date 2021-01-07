<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableSearch extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '')
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.table-search', [
            'class' => $this->class
        ]);
    }
}
