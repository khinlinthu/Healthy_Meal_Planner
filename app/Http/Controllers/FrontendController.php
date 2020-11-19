<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodpackage;
use App\Order;
use Illuminate\Support\Facades\DB;
use Auth;


class FrontendController extends Controller
{
	public function home($value='')
    {
    	return view('frontend.main_page');
    }

    public function about($value='')
    {
    	return view('frontend.about');
    }

    public function success($value='')
    {
    	return view('order.ordersuccess');
    }

   	public function signin($value='')
  	{
    return view('frontend.signinpage');
 	}
    
    public function getFoodPackages(Request $request)
    {
        $w_target = $request->w_target;
        $bf = Foodpackage::inRandomOrder()->where('weight_target',$w_target)->where('type','Breakfast')->first();
        $lunch = Foodpackage::inRandomOrder()->where('weight_target',$w_target)->where('type','Lunch')->first();
        $dinner = Foodpackage::inRandomOrder()->where('weight_target',$w_target)->where('type','Dinner')->first();

        return response()->json([
        'Breakfast'=>$bf,
        'Lunch'=>$lunch,
        'Dinner'=>$dinner,
       
       ]);
    }

    public function history()
    {
        //dd($order->get('user_id'));
        $id = Auth::id();
        // dd($id);
        $orderdetail = DB::table('orderdetails')
        ->join('orders', 'orderdetails.order_id', '=', 'orders.id')
        ->join('foodpackages', 'orderdetails.foodpackage_id', '=', 'foodpackages.id')
        ->where('orders.user_id', $id)
        ->select('foodpackages.*','orderdetails.quantity as quantity','orders.orderdate as orderdate')
        ->get();
        // dd($orderdetail);
        return view('order.history',compact('orderdetail'));
    }

    public function cart($value='')
    {
        return view('frontend.cartpage');
    }
    
 	
}
