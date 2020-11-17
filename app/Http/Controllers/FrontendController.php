<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodpackage;

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

    public function calculate($value='')
    {
    	return view('frontend.calculate');
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

    public function contact($value='')
    {
    return view('frontend.contact');
    }

    public function cart($value='')
    {
    return view('frontend.cartpage');
    }
    
 	
}
