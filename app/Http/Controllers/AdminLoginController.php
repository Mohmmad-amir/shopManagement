<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    // login function
    public function login()
    {
        # code...
        return view('admin/login/login');

    }
    public function loginCheck(Request $request)
    {
        # code...
        $email = $request->input('email');
        $password = $request->input('password');
        // count the email & password
        $count = AdminLogin::where('email',$email)->where('password', $password)->count();
        // return count
        if ($count == 1) {
            # code...
            $request->session()->put('email', $email);
            return 1;
        }
        else{
            return 0;
        }
    }
    // logout function
    public function logout(Request $request)
    {
        # code...
        $request->session()->flush();
        return redirect('/login');
    }

}
