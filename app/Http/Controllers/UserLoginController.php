<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function userlogin(Request $request)
    {
        Session::put('email', $request->email);
         return redirect('admin/index');
    }

    public function logout(Request $request){
        Session::forget('email');
        return redirect('login');
    }
}
