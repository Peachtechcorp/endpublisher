<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $orders = Order::latest()->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *  @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $users = User::all();

        return view('admin.orders.create', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //

        $request->validate([
            'user_id' => 'required',
            'description' => 'required',

        ]);

        Order::create($request->all());


        return redirect()->route('admin.orders.index')
         ->with('Success', 'Order created successfully');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
      *@param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit(Order $order)
    {
        //

        $users = User::all();

        return view('admin.orders.create', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //

        $order->update($request->input());

        return redirect()->route('orders.index')
         ->with('Success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //

        $order->delete();

        return redirect()->route('orders.index')
         ->with('Success', 'Order deleted successfully');
    }
}
