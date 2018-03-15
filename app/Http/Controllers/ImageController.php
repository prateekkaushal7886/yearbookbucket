<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Auth;
use Response;
use App\User;
use App\views;
class ImageController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$images = Image::where('rollno',Auth::user()->rollno)->latest()->get()->toArray();	
		$user = User::get();
		$roll = Auth::user()->rollno;
		$notifications = views::where('depmate',$roll)->where('read','1')->latest()->get()->toArray();

		return view('upload1',compact('images','user','notifications'));
	}

	public function comment($pic_id)
	{
		$images = Image::where('id',$pic_id)->latest()->get();
	//	dd($images);
		return view('comment',compact('images'));
	}
	public function upload(Request $request)
	{

		$user = Auth::user();
		
		if($request->hasFile('croppedImage')) {
			$file = $request->file('croppedImage');
			$file_original = $request->file('image');
			print_r($file);
			$this->validate($request, [

				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:50000',
				'classifier' => 'required'
			]);
           //you also need to keep file extension as well
			$name = $user->rollno.'_'.time().'.'.$file_original->getClientOriginalExtension();

           //using array instead of object
			$image['filePath'] = $name;
			$file->move(public_path().'/uploads/', $name);

			$classifier = request('classifier');
			$caption = request('caption');
			Image::create([
				
				'url' => 'uploads/'.$name,
				'rollno' => $user->rollno,
				'caption' => $caption,
				'classifier' => $classifier,

			]);
			$response = '<div class="post"><img src="'.request('url').'" id="'.Image::get()->count().'"><br>
			<br><strong>'.request('caption').'</strong></div>`';
			return response($response,200);
			
		}
		else
		{
			$response = "Not Uploaded";
			return response($response,404);
		}
		
	}
}