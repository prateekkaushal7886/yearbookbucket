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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /*
    -------------------------------------------------------
    function validator()
    -------------------------------------------------------
        This function validates the request data

    */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'email' => 'required|string|email|max:255',
            'email_insti' => 'required|string|email|max:255',
            'course' => 'required',
            'department' => 'required',
            'dob' => 'required',
            'phone' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

     /*
    --------------------------------------------------------------------
    function create()
    --------------------------------------------------------------------
        This function is used to create a new user in model Users 
        and add a row intable 'users' in database from the request data
        'password' column is filled as bcrypt value of the roll no.
        'view_self' and 'pro_pic' is kept empty
    */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['dob']),
            'email_insti' => $data['email_insti'],
            'dob' => $data['dob'],
            'HOR' => $data['hor'],
            'course' => $data['course'],
            'department' => $data['department'],
            'phone' => $data['phone'],
            'view_self' => '',
            'pro_pic' => '',
            'rollno' => $data['rollno']

        ]);
    }
}
