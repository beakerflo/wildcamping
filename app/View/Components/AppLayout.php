<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "No Title", $breadcrumb = 'pages,unknown')
    {
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layouts.app',[
            'title' => $this->title,
            'breadcrumb' => $this->breadcrumb
        ]);
    }
}
