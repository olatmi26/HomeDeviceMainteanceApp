<?php

namespace App\Http\Controllers\Auth\AuthCustomer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CustomerLoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function showRegForm()
    {

    }

    public function store(Request $request)
    {

    }

    public function showLogin()
    {

    }

    public function login(Request $request)
    {

    }
}

