<?php

namespace App\View\Components;

use App\Models\Svg;
use Exception;
use Illuminate\View\Component;

class SvgPicker extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subject = '', $class = '', $size = 4) {
        If (empty($subject)) {
            $this->subject = 'unknown';
        } Else {
            $this->subject = strtolower($subject);
        }
        $this->size = $size;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {

        $Svg = Svg::OfSubject($this->subject)->first()->ofSize($this->size)->withClass($this->class);

        return view('components.svg-picker', [
            'Code' => $Svg->code
        ]);
    }
}
