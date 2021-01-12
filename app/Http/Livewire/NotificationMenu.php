<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationMenu extends Component {

    public $isVisible = False;
    public $loggedOn = False;
    public $user = '';

    public function toggle() {
        $this->isVisible = !$this->isVisible;
    }

    public function loggedOn() {
        If (Auth::check()) {
            $this->user = Auth::user();
            $this->loggedOn = True;
        } else {
            $this->loggedOn = False;
        }
    }

    public function render() {
        $this->loggedOn();
        return view('livewire.notification-menu');
    }
}
