<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\views;
use App\User;
use Auth;

class ViewsController extends Controller
{
    //


    public function approve(Request $request)
    {
        $data = array();

        $data['writeup'] = $request->query;

    }
    public function approval($id)
    {

        views::where('id', $id)
        ->update([

            'approval' => '1',
        ]);
        return redirect('/profile_index');

    }
    public function disapproval($id)
    {

        views::where('id', $id)
        ->update([

            'approval' => '0',
        ]);
        return redirect('/profile_index');

    }
    public function write($roll)
    {


        views::create([
            'depmate' => $roll,
            'views' => request('viewf'),
            'user' => Auth::user()->name,
            'approval' => '0',
            
        ]);


        $mydata = User::where('rollno',$roll)->get();

        $myviews = views::where('depmate',$roll)->get();
        

        
        return redirect('/profile_index/'.$roll) ;
    }
    public function read($id)
    {
       $post = views::find($id);
        $post->read = 0;
        $post->save();
        return redirect('/profile_index') ;
    }

}
