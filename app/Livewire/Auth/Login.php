<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Client\Request;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function submit(Request $request)
    {
        dd($request);
    }
}
