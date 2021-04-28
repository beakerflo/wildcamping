<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component {

    public $title = '';
    public $leaflet = '';
    public $extraCss = '';
    public $extraJs = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "No Title", $leaflet = false) {
        $this->title = $title;
        $this->leaflet = $leaflet;
    }

    public function setLeaflet() {
        $this->extraCss .= '<link rel="stylesheet" href="/leaflet/leaflet.css">';
        $this->extraJs .= '<link rel="stylesheet" href="/leaflet/leaflet.js">';;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {
        If($this->leaflet) {
            $this->setLeaflet();
        }

        return view('layouts.app',[
            'title' => $this->title,
            'extraCss' => $this->extraCss,
            'extraJs' => $this->extraJs,
        ]);
    }
}
