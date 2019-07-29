<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\db;
use Illuminate\Support\facades\Redirect;
use Illuminate\Support\facades\session;
session_start();

class Addstudentscontroller extends Controller
{
    public function addstudent()
	{
		return view('admin.addstudent');
	}

	public function savestudent(Request $request)
	{
		//return view('admin.addstudent');
		$data=array();
		$data['student_id']=$request->student_id;
		$data['student_name']=$request->student_name;
		$data['student_email']=$request->student_email;
		$data['student_password']=$request->student_password;
		$data['student_phone']=$request->student_phone;
		/*$image=$request->file('student_image');*/

		/*if ($image)
		{
			$image_name=str_random(20);
			$text=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$text;
			$upload_path='image/';
			$image_url=$upload_path.$image_full_name;
			$succcess=$image->move($upload_path,$image_full_name);

			if ($succcess)
			{
				$data['student_image']=$image_url;

				DB::table('student_tbl')->insert($data);
				session::put('message','student added');
				return Redirect::to('/addstudent');
			}
		} */

		/*$data['image']=$image_url;*/
		/*DB::table('student_tbl')->insert($data);
				session::put('message','student added');
				return Redirect::to('/addstudent');*/

		DB::table('student_tbl')->insert($data);
				session::put('message','student added');
				return Redirect::to('/addstudent');		
	}

}
