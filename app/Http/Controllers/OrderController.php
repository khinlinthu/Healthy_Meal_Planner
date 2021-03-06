<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pending_orders = Order::where('status',0)->get();
        $confirmed_orders = Order::where('status',1)->get();
        return view('order.index',compact('pending_orders','confirmed_orders'));
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

        // validation

        // data store
        $myorder = json_decode($request->order);
        $notes = $request->notes;
        $orderdate = date('Y-m-d');
        $totalamount = 0;
        foreach ($myorder as $row) {
            $totalamount += $row->ftotal*$row->qty;
        }

        $order = new Order;
        $order->orderno = uniqid();
        $order->orderdate = $orderdate;
        $order->totalamount = $totalamount;
        $order->notes = $notes;
        $order->user_id = Auth::id(); // current logined user_id
        // dd($notes);
        $order->save();
        
        foreach ($myorder as $row) { 
            $order->foodpackages()->attach($row->idb,['quantity'=>$row->qty]);
            $order->foodpackages()->attach($row->idl,['quantity'=>$row->qty]);
            $order->foodpackages()->attach($row->idd,['quantity'=>$row->qty]);
        }

        return response()
            ->json(['msg' => 'Successful You Order!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
         $order->delete();
        return redirect()->route('order.index');
    }

    public function confirm($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return back();
    }

}
