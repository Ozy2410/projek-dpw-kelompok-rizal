<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.pengguna', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' =>
            'required|string|email|max:255|unique:users,email,' . $user->id_user . ',id_user',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

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
