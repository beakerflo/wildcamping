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
    public function __construct($route) {
        $this->steps = explode('.', str_replace('data.', 'data tables.', $route));

        $this->svg = [
            'data tables' => 'data',
            'pages' => 'pages',
            'home' => 'home',
            'teams' => 'teams'
        ];
        $this->routes = [
            'data tables' => 'pages.data',
            'pages' => 'pages.home',
            'locations' => 'data.locations',
            'sources' => 'data.sources',
            'visits' => 'data.visits',
            'favorites' => 'data.favorites',
            'images' => 'data.images',
            'welcome' => 'pages.welcome',
            'home' => 'pages.home',
            'data' => 'pages.data',
            'teams' => 'profile.show',
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
            'Svg' => $this->svg,
            'routes' => $this->routes
        ]);
    }
}