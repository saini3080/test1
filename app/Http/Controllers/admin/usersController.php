<?php

namespace App\Http\Controllers\admin;

use DB;
use App\admin\Users;

use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usersController extends Controller
{

    public function __construct()
    {
        $this->middleware(['is_admin'], ['except' => ['login']]);
    }

    //
    public function AdminAgentList(Request $request)
    {
        $users = Users::where('role','=','2')->get();

        return view('admin.users.adminagents',compact('users'));
        # code...
    }

    //
    public function AgentList(Request $request)
    {
        $users = Users::where('role','=','3')->get();

        return view('admin.users.simpleagents',compact('users'));
        # code...
    }

    //
    public function CustomerList(Request $request)
    {
    	$users = Users::where('role','=','4')->get();

    	return view('admin.users.customers',compact('users'));
    	# code...
    }

    /* 
        ******** DON't DELETE ********
		$note = new App/note;
		$note->body = 'fs fs sdfs ';
		$card = App/card::first();
		$card->notes()->save($note);
		
    */

    public function show(Request $request,Users $user)
    {
        return view('admin.users.show',compact('user'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){

            $postData = Input::all();
            $rules = array(
                'uname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'cpassword' => 'required|string|min:6|same:password'
            );

            $messages = array(
                'cpassword.same' => 'password and confirm password not match'
            );

            $validator = Validator::make($postData, $rules, $messages);

            if ($validator->fails()){
                return redirect('/admin/users/create')->withInput()->withErrors($validator);
            }else{
                // Users::create($request->all());
                // echo "<pre>";print_r($request->all());die;
                Users::create([
                    'name' => $request->uname,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => $request->role,
                ]);
                return redirect('/admin/users/create')->with('flash_message_success','User created successfully !');;
            }

        }

    	return view('admin.users.create');
    }

    public function adminagentsupdate(Request $request,Users $user)
    {
        if($request->isMethod('post')){

            $postData = Input::all();
            $rules = array(
                'uname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
                // 'now_password'          => 'required|min:6',
                // 'password'              => 'string|different:now_password',
                // 'cpassword' => 'required_with:password|same:password'
            );

            if($request->password && $request->password !== ''){
                $rules['password'] = 'sometimes|required|string|min:6';
                $rules['cpassword'] = 'required_with:password|same:password';
            }

            $messages = array(
                'cpassword.same' => 'password and confirm password not match'
            );

            $validator = Validator::make($postData, $rules, $messages);

            if ($validator->fails()){
                return redirect("/admin/adminagents/{$user->id}/update")->withInput()->withErrors($validator);
            }else{
                $user->name = $request->uname;
                $user->email = $request->email;
                if($request->password && $request->password !== ''){
                // $user->password => bcrypt($request->password),
                }
                $user->role = $request->role;
                $user->save();
                return redirect('/admin/adminagents')->with('flash_message_success','User updated successfully !');;
            }

        }

        return view('admin.users.adminagentsupdate',compact('user'));
    }

    public function simpleagentsupdate(Request $request,Users $user)
    {
        if($request->isMethod('post')){

            $postData = Input::all();
            $rules = array(
                'uname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
                // 'now_password'          => 'required|min:6',
                // 'password'              => 'string|different:now_password',
                // 'cpassword' => 'required_with:password|same:password'
            );

            if($request->password && $request->password !== ''){
                $rules['password'] = 'sometimes|required|string|min:6';
                $rules['cpassword'] = 'required_with:password|same:password';
            }

            $messages = array(
                'cpassword.same' => 'password and confirm password not match'
            );

            $validator = Validator::make($postData, $rules, $messages);

            if ($validator->fails()){
                return redirect("/admin/simpleagents/{$user->id}/update")->withInput()->withErrors($validator);
            }else{
                $user->name = $request->uname;
                $user->email = $request->email;
                if($request->password && $request->password !== ''){
                // $user->password => bcrypt($request->password),
                }
                $user->role = $request->role;
                $user->save();
                return redirect('/admin/simpleagents')->with('flash_message_success','User updated successfully !');;
            }

        }

        return view('admin.users.simpleagentsupdate',compact('user'));
    }

    public function customersupdate(Request $request,Users $user)
    {
        if($request->isMethod('post')){

            $postData = Input::all();
            $rules = array(
                'uname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
                // 'now_password'          => 'required|min:6',
                // 'password'              => 'string|different:now_password',
                // 'cpassword' => 'required_with:password|same:password'
            );

            if($request->password && $request->password !== ''){
                $rules['password'] = 'sometimes|required|string|min:6';
                $rules['cpassword'] = 'required_with:password|same:password';
            }

            $messages = array(
                'cpassword.same' => 'password and confirm password not match'
            );

            $validator = Validator::make($postData, $rules, $messages);

            if ($validator->fails()){
                return redirect("/admin/customers/{$user->id}/update")->withInput()->withErrors($validator);
            }else{
                $user->name = $request->uname;
                $user->email = $request->email;
                if($request->password && $request->password !== ''){
                // $user->password => bcrypt($request->password),
                }
                $user->role = $request->role;
                $user->save();
                return redirect('/admin/customers')->with('flash_message_success','User updated successfully !');;
            }

        }

        return view('admin.users.customersupdate',compact('user'));
    }

    public function adminagentsdelete(Request $request,Users $user)
    {
        if($user->id !== 1){
            $user->delete();
            return redirect('/admin/adminagents')->with('flash_message_success','User deleted successfully !');
        }

        return redirect('/admin/adminagents')->with('flash_message_error','User can\'t deleted');
    }

    public function simpleagentsdelete(Request $request,Users $user)
    {
        if($user->id !== 1){
            $user->delete();
            return redirect('/admin/simpleagents')->with('flash_message_success','User deleted successfully !');
        }

        return redirect('/admin/simpleagents')->with('flash_message_error','User can\'t deleted');
    }

    public function customersdelete(Request $request,Users $user)
    {
        if($user->id !== 1){
            $user->delete();
            return redirect('/admin/customers')->with('flash_message_success','User deleted successfully !');
        }

        return redirect('/admin/customers')->with('flash_message_error','User can\'t deleted');
    }
}
