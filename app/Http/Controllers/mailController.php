<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Mail; 
use App\Mail\SendMail;
use Auth;
use App\User;
use DB;

class mailController extends Controller
{
    public function send()
    {   
        //generates random password

    	function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        }

        $password=  generateRandomString();

        
        //use mailable class  in app/mail/sendmail
    	\Mail::to(Auth::user())->send(new SendMail($password));

        //update the password in database

    	DB::table('users')->where('id',Auth::user()->id)->update(array('password'=> $password));

    	return redirect('/home');
	}
}