<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\writeup;
use App\User;
use App\views;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     /*
    -------------------------------------------------------
    function index()
    -------------------------------------------------------
        This function returns home.blade.php files which is
        the dashboard
        
    */
        public function index()
        {
            $user = User::get();
            $roll = Auth::user()->rollno;
            $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();
            return view('home1',compact('user','notifications'));
        }



        public function search()
        {

            $name = request('search');
            $user = User::where('name',$name)->get();
            
            if( $user->isNotEmpty()){
                $roll = $user[0]['rollno']; 
                return redirect("/profile_index/".$roll);
            }
            else
                return back()->with('Error','Sorry, we cannot find your friend in our database');
        }





        /*
    -------------------------------------------------------
    function edit()
    -------------------------------------------------------
        This function returns edit the details of user
        
    */
        public function edit(Request $request)
        {

           $this->validate(request(),[
           
            'phone' => 'required|min:10|max:10',

        ]);
           $user = Auth::user();
           $user->email = request('email');
           $user->HOR = request('HOR');
           $user->course = request('course');
           $user->department = request('department');
           $user->phone = request('phone');
           $user->save();
           return back();
           

       }
   }

