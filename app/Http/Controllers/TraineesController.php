<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TraineesController extends Controller
{
    public function login(Request $request) {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed...
            return User::with('trainees')->where('id', \auth()->user()->id)->first();
        }
    }

    public function logout(User $user) {
        Auth::logout($user);

        return 'User has been logged out!';
    }
}
