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
            'email' => ['exclude_if:citizenship,3', 'required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'CaptchaCode' => ['required', 'valid_captcha'],
            'citizenship' => ['required', 'string', 'max:255'],
            'isCitizen' => ['exclude_unless:citizenship,1', 'required', 'string', 'max:255'],
            'nonCitizen' => ['exclude_if:citizenship,1', 'required', 'string', 'max:255'],
            'userid' => ['exclude_if:citizenship,3', 'required', 'string', 'max:255'],
            'emailid' => ['exclude_unless:citizenship,3', 'required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'race' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'passport' => ['exclude_unless:citizenship,3', 'required', 'string', 'max:255'],
            'address1' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:255'],
            'isCountry' => ['exclude_unless:citizenship,3', 'required', 'string', 'max:255'],
            'isState' => ['exclude_unless:citizenship,3', 'required', 'string', 'max:255'],
            'isCity' => ['exclude_unless:citizenship,3', 'required', 'string', 'max:255'],
            'nonCountry' => ['exclude_if:citizenship,3', 'required', 'string', 'max:255'],
            'nonState' => ['exclude_if:citizenship,3', 'required', 'string', 'max:255'],
            'nonCity' => ['exclude_if:citizenship,3', 'required', 'string', 'max:255'],
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
        if ($data['citizenship'] == 1) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'nationality' => $data['citizenship'],
                'citizenship' => $data['isCitizen'],
                'userid' => $data['userid'],
                'dob' => $data['dob'],
                'race' => $data['race'],
                'gender' => $data['gender'],
                'passport' => $data['passport'],
                'address1' => $data['address1'],
                'address2' => $data['address2'],
                'address3' => $data['address3'],
                'postcode' => $data['postcode'],
                'country' => $data['nonCountry'],
                'state' => $data['nonState'],
                'city' => $data['nonCity'],
                'security' => $data['security'],
                'answer' => $data['answer'],
            ]);
        } elseif ($data['citizenship'] ==2) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'nationality' => $data['citizenship'],
                'citizenship' => $data['nonCitizen'],
                'userid' => $data['userid'],
                'dob' => $data['dob'],
                'race' => $data['race'],
                'gender' => $data['gender'],
                'passport' => $data['passport'],
                'address1' => $data['address1'],
                'address2' => $data['address2'],
                'address3' => $data['address3'],
                'postcode' => $data['postcode'],
                'country' => $data['nonCountry'],
                'state' => $data['nonState'],
                'city' => $data['nonCity'],
                'security' => $data['security'],
                'answer' => $data['answer'],
            ]);
        } elseif ($data['citizenship'] ==3) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['emailid'],
                'password' => Hash::make($data['password']),
                'nationality' => $data['citizenship'],
                'citizenship' => $data['nonCitizen'],
                'userid' => $data['emailid'],
                'dob' => $data['dob'],
                'race' => $data['race'],
                'gender' => $data['gender'],
                'passport' => $data['passport'],
                'address1' => $data['address1'],
                'address2' => $data['address2'],
                'address3' => $data['address3'],
                'postcode' => $data['postcode'],
                'country' => $data['isCountry'],
                'state' => $data['isState'],
                'city' => $data['isCity'],
                'security' => $data['security'],
                'answer' => $data['answer'],
            ]);
        }
    }
}
