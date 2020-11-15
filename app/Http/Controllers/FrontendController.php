<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	public function home($value='')
    {
    	return view('frontend.mainpage');
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

    public function contact($value='')
    {
    return view('frontend.contact');
    }
 	
}
