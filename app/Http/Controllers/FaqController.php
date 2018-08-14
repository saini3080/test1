<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware(['is_admin'], ['except' => ['login']]);
    }
    public function addFaq(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data = $request->all();
    		//echo '<pre>';print_r($data);die('dd');
    		$faq = new Faq;
			$faq->name = $data['faq_name'];
    		$faq->description = $data['faq_desc'];
    		$faq->save();
    		return redirect('/admin/view-faq')->with('flash_message_success','Faq added successfully');
    	}
    	return view('admin.faq.add-faq');
    }
    public function editFaq(Request $request,$id = null)
    {
    	if($request->isMethod('post'))
    	{
    		$data = $request->all();
    		Faq::where(['id'=>$id])->update(['name'=>$data['faq_name'],'description'=>$data['faq_desc']]);
    		return redirect('/admin/view-faq')->with('flash_message_success','Faq update successfully');
    	}
    	$FaqDetails = Faq::where(['id'=>$id])->first();
    	return view('admin.faq.edit-faq')->with(compact('FaqDetails'));
    }
    public function deleteFaq($id = null)
    {
    	if(!empty($id))
    	{
    		Faq::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_success','Faq deleted successfully');
    	}
    }
    public function viewFaq()
    {
    	$Faq = Faq::get();
    	return view('admin.faq.view-faq')->with(compact('Faq'));
    }
}
