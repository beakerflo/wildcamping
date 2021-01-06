<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($steps) {
        $this->steps = explode(',', $steps);
        $this->svg = [
            'data table' => '<svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>',
            'pages' => '<svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
        ];
        $this->routes = [
            'data table' => 'pages.data',
            'pages' => 'pages.home',
            'locations' => 'data.locations',
            'sources' => 'data.sources',
            'visits' => 'data.visits',
            'favorites' => 'data.favorites',
            'images' => 'data.images',
            'welcome' => 'pages.welcome'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb',[
            'steps' => $this->steps,
            'svg' => $this->svg,
            'routes' => $this->routes
        ]);
    }
}
