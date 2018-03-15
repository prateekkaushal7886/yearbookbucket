<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\likes;

use App\Comment;

use App\Image;

use App\User;

use App\views;



use DB;

class CountController extends Controller
{
    public function index()
    {

		//to select 50 images and show them in 10 per page
		$images=Image::orderBy('totalcount','DESC')->take(50)->paginate(5);

		$currentpage=$images->currentPage();
		$perpage=$images->perPage();

		$user = User::get();
		$roll = Auth::user()->rollno;
		$notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();

    	return view('trending1',compact('images','user','notifications','currentpage','perpage'));
    }
}
