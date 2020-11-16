<?php

namespace App\Http\Controllers;

use App\Foodpackage;
use Illuminate\Http\Request;

class FoodpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $foodpackages= Foodpackage::all();
       return view('foodpackage.index',compact('foodpackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('foodpackage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // dd($request);
          $request->validate([
            "foodpackages"=>"required",
            "totalCalories"=>"required",
            "price"=>"required",
            "discount"=>"sometimes|required",
            "weight_target"=>"required",
            "type"=>"required"
            
        ]);


        $foodpackage = new Foodpackage();
        $foodpackage->codeno = uniqid();
        $foodpackage->foodpackages =$request->foodpackages;
        $foodpackage->totalCalories = $request->totalCalories; 
        $foodpackage->price = $request->price;
        $foodpackage->discount = $request->discount;
        $foodpackage->weight_target=$request->weight_target;
        $foodpackage->type = $request->type;

        // dd($foodpackage);
        $foodpackage->save();



        return redirect()->route('foodpackage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foodpackage  $foodpackage
     * @return \Illuminate\Http\Response
     */
    public function show(Foodpackage $foodpackage)
    {
      return view('foodpackage.show',compact('foodpackage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foodpackage  $foodpackage
     * @return \Illuminate\Http\Response
     */
    public function edit(Foodpackage $foodpackage)
    {
        return view('foodpackage.edit',compact('foodpackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foodpackage  $foodpackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foodpackage $foodpackage)
    {
        // dd($request);
          $request->validate([
            "foodpackages"=>"required",
            "totalCalories"=>"required",
            "price"=>"required",
            "discount"=>"sometimes|required",
            "weight_target"=>"required",
            "type"=>"required"
            
        ]);

        $foodpackage->foodpackages =$request->foodpackages;
        $foodpackage->totalCalories = $request->totalCalories; 
        $foodpackage->price = $request->price;
        $foodpackage->discount = $request->discount;
        $foodpackage->weight_target=$request->weight_target;
        $foodpackage->type = $request->type;

        // dd($foodpackage);
        $foodpackage->save();



        return redirect()->route('foodpackage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foodpackage  $foodpackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foodpackage $foodpackage)
    {
         $foodpackage->delete();

        return redirect()->route('foodpackage.index');
    }
}
