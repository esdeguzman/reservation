<?php

namespace App\Http\Controllers;

use App\Trainee;
use App\User;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function store(Request $request) {

//        $user = User::create([
//            'email' => $request->email,
//            'username' => $request->username,
//            'password' => bcrypt($request->password),
//        ]);
//
//        Trainee::create([
//            'user_id' => $user->id,
//            'first_name' => $request->first_name,
//            'middle_name' => $request->middle_name,
//            'last_name' => $request->last_name,
//            'mobile_number' => $request->mobile_number,
//            'rank' => $request->rank,
//        ]);

        return [
            'success' => 'Sign up success'
        ];

    }
}
