<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginWorkerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:worker')->except('logout');
    }
    public function showRegForm()
    {
        return view('auth.worker-register');
    }
    public function store(Request $request)
    {

    }
    public function showLogin()
    {
        return view('auth.worker-login');

    }
    public function login(Request $request)
    {

    }
}
