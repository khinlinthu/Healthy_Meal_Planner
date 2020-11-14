<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function calculate($value='')
    {
    	return view('frontend.calculatepage');
    }

    public function signin($value='')
    {
    	return view('frontend.signinpage');
    }
}
