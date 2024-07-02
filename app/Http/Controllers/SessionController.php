<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function register()
    {


        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        // dd($request->all());
        // die();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => "mahasiswa"

        ];

        User::create($data);
        return redirect('/login');
    }

    public function login()
    {


        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ], [
            'email.required' => 'email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {

            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return redirect('/dashboard');
                    break;
                case 'mahasiswa':
                    return redirect('/vote');
                    break;
                default:
                    return redirect('/login')->withErrors('Role Tidak Valid')->withInput();
            }
        } else {
            return redirect('/login')->withErrors('email atau Password Salah')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
