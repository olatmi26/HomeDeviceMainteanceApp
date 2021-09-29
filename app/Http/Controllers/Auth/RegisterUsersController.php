<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterUsersController extends Controller
{
   public function saveWorker(Request $request)
    {
        $request->validate([
            'Firstname' => ['required', 'string', 'max:20'],
            'Lastname' => ['required', 'string', 'max:20'],
            'Othername' => ['string', 'max:20'],
            'MobileN01' => ['required', 'string', 'max:11'],
            'MobileN02' => ['required', 'string', 'max:11'],
            'MobileN03' => ['required', 'string', 'max:11'],
            'ResidentialAddress' => ['required', 'string'],
            'DOB' => ['required', 'date'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'password']
        ]); 
      
    }
}
