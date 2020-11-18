<?php

namespace App\Http\Controllers;

use App\Userdetail;
use Illuminate\Http\Request;

class UserdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Userdetail $userdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Userdetail $userdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userdetail $userdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdetail $userdetail)
    {
        //
    }
}
