<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAttributes =$request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ]);
        $employerAttributes =$request->validate([
            'employer' => 'required',
            'logo'=> 'required|mimes:png,jpg,jpeg|max:2048',
            'link' => 'required|active_url'
        ]);

        $user = User::create($userAttributes);

        $logopath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'url' => $employerAttributes['link'],
            'logo' => $logopath
        ]);
        Auth::login($user);
        return redirect('/');
    }
}
