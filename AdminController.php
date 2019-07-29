<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\db;
use Illuminate\Support\facades\Redirect;
use Illuminate\Support\facades\session;
session_start();

class AdminController extends Controller
{
	public function admin_dashboard()
	{
		return view('admin.dashboard');
	}

	//student login
	public function student_dashboard()
	{
		return view('student.dashboard');
	}
	//admin login

    public function login_dashboard(Request $request)
    {
    	//return view('admin.dashboard');
    	$email=$request->admin_email;
    	$password=$request->admin_pass;
    	$result=db::table('admin_tbl')
    	->where('admin_email',$email)
    	->where('admin_pass',$password)
    	->first();
    	//echo "</pre";
    	//print_r($result);
    	if($result)
    	{
    		session::put('admin_email',$result->admin_email);
    		session::put('admin_id',$result->admin_id);
    		return redirect::to('/admin_dashboard');
    	}

    	else{
    		return redirect::to('/backend');
    	}



    }
}
