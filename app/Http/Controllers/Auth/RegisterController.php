<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'min:3', 'max:50', 'unique:users'],
            'surname' => ['required', 'string', 'min:3', 'max:50'],
            'country' => ['required', 'string', 'min:3', 'max:50'],
            'city' => ['required', 'string', 'min:3', 'max:50'],
            'address' => ['required', 'string', 'min:3', 'max:50'],

/*            'day' => ['required', 'integer', 'between:1,31'],
            'month' => ['required', 'integer', 'between:1,12'],
            'year' => ['required', 'integer', 'between:1900,2020'],*/

            'dob' => ['required', 'before:now'],
            'phone' => ['string', 'max:15'],
            'mobile' => ['string', 'max:15'],
            'post_code' => ['required', 'string', 'min:5', 'max:7'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        $dob = $data['year'] . "-" . $data['month'] . "-" . $data['day'];
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'surname' => $data['surname'],
            'country' => $data['country'],
            'city' => $data['city'],
            'address' => $data['address'],
            'post_code' => $data['post_code'],
//            'dob' => $dob,
            'dob' => $data['dob'],
            'phone' => $data['phone'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
