<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Client\Request;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function submit(Request $request)
    {
        dd($request);
    }
}
