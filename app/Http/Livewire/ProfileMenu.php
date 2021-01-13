<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileMenu extends Component {

    public $isVisible = False;
    public $loggedOn = False;
    public $user = '';
    public $profilePic = '';

    public function toggle() {
        $this->isVisible = !$this->isVisible;
    }

    public function loggedOn() {
        $this->loggedOn = Auth::check();
        $this->user = Auth::user();
    }

    public function render() {
        $this->loggedOn();
        return view('livewire.profile-menu');
    }
}
