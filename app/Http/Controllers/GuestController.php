<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    // protected $guard = 'guest';

    public function index()
    {
        return view('guest.auth.register');
    }

    public function create()
    {
        return view('guest.auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:guests'],
            'password' => ['required'],
        ]);

        $guest = Guest::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("home")->withSuccess('You have signed-in');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('guest')->attempt($credentials)) {
            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function loginView()
    {
        return view('guest.auth.login');
    }

    public function home()
    {
        if (Auth::guard('guest')->check()) {
            return view('home');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('guest')->logout();

        return Redirect('login');
    }
}
