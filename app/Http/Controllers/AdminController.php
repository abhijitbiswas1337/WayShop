<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['username'], 'password' => $data['password']])) {
                Alert::toast('WelCome to Dashboard', 'success');
                return redirect()->route('admin-dashboard');
            } else {
                alert()->error('Error', 'Username & Password Mismatched.');

                return redirect()->route('admin-login');
            }
        }
        return view('Administrator.admin_login');
    }

    public function dashboard()
    {
        return view('Administrator.dashboard');

    }

    public function logOut()
    {
        Session::flush();
        Alert::toast('Successfully Logout', 'success');
        return redirect()->route('admin-login');
    }


}
