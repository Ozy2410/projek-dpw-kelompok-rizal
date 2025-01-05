<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        if (request()->isMethod('post')) {
            $email = request('email');
            $password = request('password');
            $user = User::where('email', $email)->first();
            if ($user && $user->password == $password) {
                session(['user' => $user]);
                return redirect()->route('home');
            }

            return redirect()->back();
        }

        return view('login');
    }

    public function register(){
        if (request()->isMethod('post')) {
            $data = request()->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $data['password'] = bcrypt($data['password']);

            $user = User::create($data);

            return redirect()->route('login');
        }

        return view('register');
    }
}
