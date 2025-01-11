<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        if (request()->isMethod('post')) {
            $email = request('email');
            $password = request('password');
            $user = User::where('email', $email)->first();
            if ($user && $user->password == $password) {
                Auth::login($user);
                return redirect()->route('home');
            }

            return redirect()->back();
        }

        return view('login');
    }

    public function register()
    {
        if (request()->isMethod('post')) {
            $data = request()->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);

            $data['password'] = bcrypt($data['password']);

            $user = User::create($data);

            Auth::login($user);

            return redirect()->route('home');
        }

        return view('register');
    }
}
