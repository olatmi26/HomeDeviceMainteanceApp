<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTaskOperationController extends Controller
{
    public function getAdminDashboard()
    {
        return view('layouts.admin-dashboard.master');
    }
}
