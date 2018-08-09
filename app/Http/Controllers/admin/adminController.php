<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    //
    public function dashboard($value='')
    {
    	# code...
    	return view('admin.dashboard');
    }
}
