<?php

namespace Restauapp\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Restauapp\Distrito;
use Restauapp\Role;
use Restauapp\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Restauapp\User;

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {

        $district = Distrito::all();
        $role = Role::all();
        return view('auth.register', compact('district', 'role'));
    }


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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Restauapp\User
     */

    protected function create(array $data)
    {



        $user = User::create([

            'name' => $data['name'],
            'Apellidos' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'Distrito_id' => $data['district'],
            'Restaurant_id' => $data['restaurant']


        ]);


        $user->roles()->attach(Role::where('id', $data['role'])->first());

        return $user;
    }



}
