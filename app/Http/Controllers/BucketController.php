<?php

namespace App\Http\Controllers;
use Auth;
use App\bucket;
use App\views;
use App\User;
use App\Image;

use Illuminate\Http\Request;

class BucketController extends Controller
{
    //
    public function index()
   {
       $myviews = bucket::where('roll',Auth::user()->rollno)->get();
        $user = User::get();
       $roll = Auth::user()->rollno;
       
       $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();
       return view('bucket_index',compact('myviews','notifications','user'));
   }


   public function comment($id)
   {
   	$file = request('fileToUpload');
   			$user = Auth::user();
$name = $user->rollno.'_'.time().'.'.$file->getClientOriginalExtension();


   	$file->move(public_path(), $name);
$roll = Auth::user()->rollno;
   	bucket::create([
    'roll' => $roll,
    'list' => $id,
    'pic' => $name,
  ]);



       $myviews = bucket::where('roll',Auth::user()->rollno)->get();
        $user = User::get();
       
       
       $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();
       return redirect('/bucket') ;
   }

}
