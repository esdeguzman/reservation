<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        $branches = \App\Branch::all();
        $departments = \App\Department::all();
        $positions = \App\Position::all();
        $roles = \App\Role::all();

        return view('auth.register', compact('branches', 'departments', 'positions', 'roles'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'employee_id' => 'required|unique:co_admins',
            'first_name' => 'required',
            'last_name' => 'required',
            'branch_id' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'role_id' => 'required',
            'email' => 'required|email|max:255|unique:users'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $password = str_random(6);

        $user = User::create([
            'email' => $data['email'],
            'username' => $data['employee_id'],
            'password' => bcrypt($password),
        ]);

        $coAdmin = \App\CoAdmin::create([
            'user_id' => $user->id,
            'role_id' => $data['role_id'],
            'department_id' => $data['department_id'],
            'position_id' => $data['position_id'],
            'employee_id' => $data['employee_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ]);

        $user->notify(new \App\Notifications\SuccessfulRegistration($password));

        return $user;
    }
}
