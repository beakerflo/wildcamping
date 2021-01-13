<?php

namespace App\View\Components;

use App\Models\Source;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class SelectSources extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($teams = '',$class = '') {
        $this->class = $class;
        $this->teams = $teams;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {

        return view('components.select-sources', [
            'sources' => Source::InTeam($this->teams)->orderBy('name', 'asc')->get(),
            'class' => $this->class
        ]);
    }
}
