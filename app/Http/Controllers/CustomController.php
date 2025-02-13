<?php

namespace App\Http\Controllers;

use App\Models\CustomLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomController extends Controller
{
    //=====================login=========================
    public function customlogin()
    {
        return view('front.customlogin');
    }
    public function loginstore(Request $request)
    {
        $request->validate([
            'email' => 'required |email|',
            'password' => 'required|min:8',
        ]);

        $customer = CustomLogin::where('email', $request->email)->first();

        if (isset($customer)) {
            if (Hash::check($request->password, $customer->password)) {
                Session::put('email', $customer->email);
                Session::put('name', $customer->name);
                Session::put('customer_id', $customer->id);
                return redirect("/")->with('success', 'Login Successfully');
            } else {
                return redirect("customlogin")->with('error', 'Password Not Matched');
            }
        } else {
            return redirect("customlogin")->with('error', 'User Not Found');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    //============================register=============================
    public function index()
    {

        return view('front.customregister');
    }
    public function store(Request $request)

    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:custom_logins',
            'password' => 'required',

        ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);



        CustomLogin::create($data);
        return redirect('/');
    }
}
