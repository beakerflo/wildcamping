<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class TopMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->items = [
                [
                'name' => 'Home',
                'route' => 'pages.home'
            ], [
                'name' => 'Data',
                'route' => 'pages.data'
            ], [
                'name' => 'Documentation',
                'route' => 'pages.documentation'
            ], [
                'name' => 'API',
                'route' => 'pages.home'
            ], [
                'name' => 'About',
                'route' => 'pages.about'
            ], [
                'name' => 'Contact',
                'route' => 'pages.contact'
            ]
        ];
        $this->authItems = [

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {
        if (Auth::user()) {
            $this->items = array_merge($this->Items, $this->authItems);
        }

        return view('components.top-menu',[
            'items' => $this->items,
        ]);
    }
}
