<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::users()->get();

        return view('admin.dashboard', compact('users'));
    }


    public function userLogin(User $user)
    {
        if(session()->has('temp_user')) {
            session()->forget('temp_user');
        }

        session()->put('temp_user', $user);

        return redirect()->route('temp_user.dashboard')->withSuccess('User logged in as user');
    }
}
