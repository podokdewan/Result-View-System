<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\db;

class AllstudentsController extends Controller
{
    public function allstudent()
	{
		//return view('admin.allstudent');
		$allstudent_info=DB::table('student_tbl')->get();
		$manage_student=view('admin.allstudent')
						->with('all_student_info',$allstudent_info);

		return view('layout')->with('allstudent',$manage_student);
	}


	//student info view
	public function studentview($student_id)
	{
		//return view('admin.view');
		$student_description_view=DB::table('student_tbl')
			->select('*')
			->where('student_id',$student_id)
			->first();

		$manage_description_student=view('admin.view')
			->with('student_description_profile',$student_description_view);
			return view('layout')	
			->with('view',$manage_description_student);


	}

	//student edit
	public function studentedit($student_id)
	{
		//return view('admin.view');
		$student_description_view=DB::table('student_tbl')
			->select('*')
			->where('student_id',$student_id)
			->first();

		$manage_description_student=view('admin.student_edit')
			->with('student_description_profile',$student_description_view);
			return view('layout')	
			->with('student_edit',$manage_description_student);


	}

	//student update
	public function studentupdate(Request $request,$student_id)
	{
		$data=array();
		$data['student_id']=$request->student_id;
		$data['student_name']=$request->student_name;
		$data['student_email']=$request->student_email;
		$data['student_password']=$request->student_password;
		$data['student_phone']=$request->student_phone;


		DB::table('student_tbl')
			->where('student_id',$student_id)
			->update($data);

		return redirect(route('all.student'));
	}
    //Delete Student
    public function destroy($id)
    {
        DB::table('student_tbl')->where('student_id', $id)->delete();
        return redirect()->back()->with('message', 'Role deleted successfully.');
    }

}
