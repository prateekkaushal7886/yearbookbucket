<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\views;
use Auth;
use App\User;
use App\Image;

class profile extends Controller
{
    //
   public function index()
   {
       $myviews = views::where('depmate',Auth::user()->rollno)->latest()->get();
       $user = User::get();
       $roll = Auth::user()->rollno;
       $notifications = views::where('depmate',$roll)->where('read','1')->latest()->get()->toArray();

       return view('profile_index',compact('myviews','user','notifications'));
   }


   public function testimonials($roll)
   {
       $mydata = User::where('rollno',$roll)->latest()->get();

       $myviews = views::where('depmate',$roll)->latest()->get();

       $images = Image::where('rollno',$roll)->latest()->get()->toArray();    
       $user = User::get();
       $roll = Auth::user()->rollno;
       $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();


       return view('testimonial',compact('myviews','mydata','images','user','notifications'));
   }

   public function updateread()
   {
        //changing the default value of 1 to 0
    views::where('read',1)->where('user',Auth::user()->name)->update(array('read' => 0));


    return redirect('/profile_index') ;
}

}
