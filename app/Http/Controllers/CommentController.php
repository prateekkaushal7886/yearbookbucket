<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Auth;
use App\Image;
use DB;
class CommentController extends Controller
{
  public function add()
  {
   Comment::create([
    'pic_id' => request('pic_id'),
    'comments' => request('comments'),
    'user_id' => Auth::user()->id,
  ]);


   //it will increase totalcount by 2 
Image::where('id',request('pic_id'))->increment('totalcount', 2);


   $mydata = Comment::where('pic_id',request('pic_id'))->latest()->get();


   $content= '<table class="table-striped col l12 s12 m12 table-scrollable">
   <tbody>  '; 

   foreach($mydata as $view)   
   {   
    $name = User::find($view['user_id'])->name;
    $content=$content. '    
    <tr class="row"><td style = "word-wrap: break-word;padding:20px; " class="col l9"> <b>'.$name.' said:</b><br>
    '.$view['comments'].'
    </td>'
    ;


  }
  $content=$content.' </tbody>
  </table>';
  return response($content, 200);  	


}



public function new()
{


  $mydata = Comment::where('pic_id',request('pic_id'))->latest()->get();

  $content= '<table class="table-striped col l12 s12 m12 table-scrollable">
  <tbody>  '; 

  foreach($mydata as $view)   
  {   
    $name = User::find($view['user_id'])->name;
    $content=$content. '    
    <tr class="row"><td style = "word-wrap: break-word;padding:20px; " class="col l9"> <b>'.$name.' said:</b><br>
    '.$view['comments'].'
    </td>'
    ;


  }
  $content=$content.' </tbody>
  </table>';
  return response($content, 200);  	


}
}