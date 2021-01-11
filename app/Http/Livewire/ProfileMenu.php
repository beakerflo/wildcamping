<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileMenu extends Component {

    public $isVisible = False;

    public function toggle() {
        $this->isVisible = !$this->isVisible;
    }

    public function render() {
        return view('livewire.profile-menu',[
            'Show' => $this->isVisible
        ]);
    }
}
