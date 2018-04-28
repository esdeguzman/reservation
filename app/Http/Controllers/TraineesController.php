<?php

namespace App\Http\Controllers;

use App\Trainee;
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

    public function store(Request $request) {
//        return $request->all();
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        Trainee::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'mobile_number' => $request->mobile_number,
            'rank' => $request->rank,
        ]);

        Auth::loginUsingId($user->id);

        return User::with('trainees')->where('id', $user->id)->first();

    }
}
