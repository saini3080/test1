<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trasactions;

class TrasactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['is_admin'], ['except' => ['login']]);
    }
    public function viewTrasactions()
    {
    	$Trasactions = Trasactions::get();
    	return view('admin.subscription.transactions.view-transaction')->with(compact('Trasactions'));
    }
    public function viewTrasactionsOne(Request $request,$id = null)
    {
    	$TrasactionsOne = Trasactions::where(['id'=>$id])->first();
    	return view('admin.subscription.transactions.view-transaction-one')->with(compact('TrasactionsOne'));
    }
}
