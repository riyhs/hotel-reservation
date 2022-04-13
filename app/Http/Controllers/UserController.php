<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\HotelFacility;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function create()
    {
        return view('admin.auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("admin")->withSuccess('Login details are not valid');
    }

    public function loginView()
    {
        return view('admin.auth.login');
    }

    public function dashboard()
    {
        if (Auth::guard('web')->check()) {
            return view('admin.dashboard');
        }

        return redirect("admin")->withSuccess('You are not allowed to access');
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('web')->logout();

        return Redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function welcome()
    {
        $rooms = Room::orderBy('id', 'ASC')->take(8)->get();
        $hotelFacilities = HotelFacility::orderBy('id', 'ASC')->take(6)->get();
        return view('welcome', compact('rooms', 'hotelFacilities'));
    }

    public function accomodation()
    {
        $rooms = Room::orderBy('price', 'DESC')->take(12)->get();
        return view('accomodation', compact('rooms'));
    }
}
