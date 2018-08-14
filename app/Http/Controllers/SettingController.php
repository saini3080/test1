<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class SettingController extends Controller
{
    public function editAdminprofile(Request $request)
    {
    	$id = 1;
    	if($request->isMethod('post'))
    	{
    		$data = $request->all();
    		$getData = DB::table('users')->where('id', $id)->first();
    		//echo '<pre>';print_r($getData);die;
    		if($data['new_password'] == '')
    		{
    			$psswd = $getData->password;
    		}
    		else
    		{
    			$psswd = md5($data['new_password']);
    		}
    		User::where(['id'=>$id])->update(['name'=>$getData->name,'email'=>$data['email'],'password'=>$psswd]);
    		return redirect('/admin/edit-profile')->with('flash_message_success','Profile update successfully');
    	}
    	$AdminDetails = User::where(['id'=>$id])->first();
    	return view('admin.setting.edit-profile')->with(compact('AdminDetails'));
    }
}
