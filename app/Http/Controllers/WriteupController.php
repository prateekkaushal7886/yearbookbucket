<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\writeup;

use Auth;

use DB;
use App\views;
class WriteupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	//$writeups = writeup::all();

        $writeups = writeup::where('rollno',Auth::user()->rollno)->latest()->get();
        
        $user = User::get();
        $roll = Auth::user()->rollno;
        $notifications = views::where('depmate',$roll)->where('read','1')->latest()->get()->toArray();

        return view('writeup2', compact('writeups','user','notifications'));
    }



    public function store()
    {


    	writeup::create([

    		'writeup' => request('writeup'),

    		'topic' => request('topic'),

    		'rollno' => Auth::user()->rollno
      ]);



    	/*$writeup = new \App\writeup;

    	$writeup->rollno = $user->rollno ;

    	$writeup->writeup = request('writeup');

    	$writeup->topic = request('topic');

    	$writeup->save(); */

    	return redirect('/writeup');

    }

    public function delete($id)
    {
        \DB::table('writeups')->where('id',$id)->delete();
        return redirect('/writeup');
    }



    public function updates(Request $request)
    {
        $data = array();
        $data['writeup'] = $request->writeup;

        DB::table('writeups')->where('id',$request->id)->update($data);
    }

}
