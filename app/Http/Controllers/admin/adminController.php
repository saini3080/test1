<?php

namespace App\Http\Controllers\admin;

use Auth;
use Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{

	public function __construct()
	{
	    $this->middleware(['is_admin'], ['except' => ['login']]);
	}

    //
    public function dashboard($value='')
    {
    	# code...
    	return view('admin.dashboard');
    }

    public function login(Request $request)
    {
    	if($request->isMethod('post')){
            $data = $request->input();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'role' => '1'])) {
                
                return redirect('/admin/');
            }else{
                //echo "failed"; die;
                return redirect('/admin/login')->with('flash_message_error','Invalid Username or Password');
            }
        }

    	return view('admin.login');
    }

    public function dashboard2($value='')
    {
    	# code...
    	return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect('/admin/login')->with('flash_message_success','Logged out Successfully'); 
    }
}
