<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // THis is to redirect to dashboard if the admin is already logged in
    public function showLogin()
    {
        if (session('admin')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = trim($request->input('username', ''));
        $password = trim($request->input('password', ''));

        if ($username === '' || $password === '') {
            return back()->with('error', 'Please enter both username and password.');
        }

        $admin = Admin::where('username', $username)->first();

        // THis to verify thee password using password_verify against the stored hash in the database
        if ($admin && password_verify($password, $admin->password_hash)) {
            session([
                'admin'    => true,
                'admin_id' => $admin->id,
                'username' => $admin->username,
            ]);

            $admin->last_login = now();
            $admin->save();

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid username or password.');
    }

    // session flush
    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}