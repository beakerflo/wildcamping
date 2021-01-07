<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FooterMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->itemsLeft = [
            [
                'name' => 'Privacy',
                'route' => 'pages.privacy'
            ], [
                'name' => 'Security',
                'route' => 'pages.security'
            ]
        ];
        $this->itemsRight = [
            [
                'name' => 'Contact',
                'route' => 'pages.contact'
            ], [
                'name' => 'API',
                'route' => 'home'
            ], [
                'name' => 'About',
                'route' => 'pages.about'
            ]


        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.footer-menu',[
            'ItemsLeft' => $this->itemsLeft,
            'ItemsRight' => $this->itemsRight
        ]);
    }
}
