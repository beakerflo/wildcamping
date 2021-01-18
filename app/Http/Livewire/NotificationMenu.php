<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationMenu extends Component {

    public $isVisible = False;
    public $user = '';
    public $notificationCount = 0;

    public function toggle() {
        $this->isVisible = !$this->isVisible;
    }

    public function render() {
        $this->user = Auth::user();
        return view('livewire.notification-menu');
    }
}
