<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->get(md5('username')) ? base64_decode($request->get(md5('username'))) : null;
        $password = $request->get(md5('password')) ? hash("md5", base64_decode($request->get(md5('password')))) : null;

        $credentials = Validator::make([
            'username' => $username,
            'password' => $password
        ], [
            'username' => ['required'],
            'password' => ['required']
        ])->validate();

        // Set Guard
        $Auth = Auth::guard('branch');
        if ($username == 'admin') {
            $Auth = Auth::guard('admin');
            Auth::guard('admin')->logout();
        } else {
            Auth::guard('branch')->logout();
        }

        if ($Auth->attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['success' => "Login success, redirect...", 'auth' => $Auth->name]);
        }

        return response()->json(['error' => "Username or password is wrong"], 500);
    }

    public function logout(Request $request)
    {
        $request->auth == 'admin' ? Auth::guard('admin')->logout() : Auth::guard('branch')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['success' => "Logout success, redirect..."]);
    }
}
