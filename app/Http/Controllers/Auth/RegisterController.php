<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'email' => ['required_unless:citizenship,3', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'CaptchaCode' => ['required', 'valid_captcha'],
            'citizenship' => ['required', 'string', 'max:255'],
            'isCitizen' => ['required', 'string', 'max:255'],
            'nonCitizen' => ['required', 'string', 'max:255'],
            'userid' => ['required', 'string', 'max:255'],
            'emailid' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'race' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'passport' => ['required', 'string', 'max:255'],
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['required', 'string', 'max:255'],
            'address3' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:255'],
            'isCountry' => ['required_if:citizenship,3', 'string', 'max:255'],
            'isState' => ['required_if:citizenship,3', 'string', 'max:255'],
            'isCity' => ['required_if:citizenship,3', 'string', 'max:255'],
            'nonCountry' => ['required_unless:citizenship,3', 'string', 'max:255'],
            'nonState' => ['required_unless:citizenship,3', 'string', 'max:255'],
            'nonCity' => ['required_unless:citizenship,3', 'string', 'max:255'],
            'security' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
