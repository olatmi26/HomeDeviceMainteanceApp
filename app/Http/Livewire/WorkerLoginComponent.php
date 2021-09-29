<?php

namespace App\Http\Livewire;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Livewire\Component;

class WorkerLoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;
    public $validate;
    public function render()
    {
        return view('livewire.worker-login-component');
    }
    public function login()
    {
        $this->validate([
            $this->email =>'required|email|string',
            $this->password =>'required'

        ]);
       return  dd($this->email, $this->password);
    }
}
