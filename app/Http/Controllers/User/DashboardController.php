<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function logoutTempUser()
    {
        if(session()->has('temp_user')) {
            session()->forget('temp_user');
        }

        return redirect()->route('admin.dashboard');
    }
}
