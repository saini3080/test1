<?php

namespace App\Http\Controllers\admin;

use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

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

    	// $this->validate($request, [ 'email' => 'required|email', 'password' => 'required' ]);
    // ContactUS::create($request->all()); 
    	if($request->isMethod('post')){

			$postData = Input::all();
			$rules = array(
				'email' => 'required|email',
				'password' => 'required',
			);

			// $validator = Validator::make($postData, $rules, $messages);
			$validator = Validator::make($postData, $rules);

			if ($validator->fails()){
				return redirect('/admin/login')->withInput()->withErrors($validator);
			}else{
				$data = $request->input();
				if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'role' => '1'])) {
					return redirect('/admin/');
				}else{
					//echo "failed"; die;
					return redirect('/admin/login')->with('flash_message_error','Invalid Email or Password');
				}
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
