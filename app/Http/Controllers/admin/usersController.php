<?php

namespace App\Http\Controllers\admin;

use DB;
use App\admin\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usersController extends Controller
{
    //
    public function index(Request $request)
    {
    	$users = Users::all();

    	// echo '<pre>';print_r($users);die;
    	return view('admin.users.index',compact('users'));
    	# code...
    }

    /*
		$note = new App/note;
		$note->body = 'fs fs sdfs ';
		$card = App/card::first();
		$card->notes()->save($note);
		
    */

    public function show(Request $request,Users $user)
    {
    	// $users = Users::all();

    	// echo '<pre>';print_r($users);die;
    	return view('admin.users.show',compact('user'));
    	# code...
    }
}
