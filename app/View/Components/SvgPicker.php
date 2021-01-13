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

        $this->subject = $subject;
        $this->size = $size;
        $this->class = $class;

    }

    /**
     * Check if we hare a correct Subject
     *
     * @return void
     */
    function checkSubject() {

        If (empty($this->subject)) {
            $this->subject = 'unknown';
            return;
        } Else {
            $this->subject = strtolower($this->subject);
        }

        If (Svg::where('subject',$this->subject)->count() > 0) {
            return;
        } Else {
            $this->subject = 'unknown';
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {

        $this->checkSubject();
        $Svg = Svg::OfSubject($this->subject)->first()->ofSize($this->size)->withClass($this->class);

        return view('components.svg-picker', [
            'Code' => $Svg->code
        ]);

    }

}
