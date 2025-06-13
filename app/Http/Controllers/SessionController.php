<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
        request()->session()->regenerate();
        return redirect('/');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
