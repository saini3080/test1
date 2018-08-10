<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;


class subscriptionController extends Controller
{
    public function addSubscription(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data = $request->all();
    		//echo '<pre>';print_r($data);die('dd');
    		$subscription = new Subscription;
			$subscription->name = $data['subsciption_name'];
    		$subscription->description = $data['subsciption_desc'];
    		$subscription->price = $data['subsciption_price'];
    		$subscription->duration = $data['subsciption_duration'];
    		$subscription->save();
    		return redirect('/admin/view-subscription')->with('flash_message_success','Subscription added successfully');
    	}
    	return view('admin.subscription.add-subscription');
    }
    public function editSubscription(Request $request,$id = null)
    {
    	if($request->isMethod('post'))
    	{
    		$data = $request->all();
    		Subscription::where(['id'=>$id])->update(['name'=>$data['subsciption_name'],'description'=>$data['subsciption_desc'],'price'=>$data['subsciption_price'],'description'=>$data['subsciption_duration']]);
    		return redirect('/admin/view-subscription')->with('flash_message_success','Subscription update successfully');
    	}
    	$SubscriptionDetails = Subscription::where(['id'=>$id])->first();
    	return view('admin.subscription.edit-subscription')->with(compact('SubscriptionDetails'));
    }
    public function deleteSubscription($id = null)
    {
    	if(!empty($id))
    	{
    		Subscription::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_success','Subscription deleted successfully');
    	}
    }
    public function viewSubscription()
    {
    	$Subscription = Subscription::get();
    	return view('admin.subscription.view-subscription')->with(compact('Subscription'));
    }
}
