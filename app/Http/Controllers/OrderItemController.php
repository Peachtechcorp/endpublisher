<?php

namespace App\Http\Controllers;

use App\Models\Order\Item;
use App\Models\Order\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $orderItems = OrderItem::latest()->paginate(10);

        return view('admin.orders.index', compact('orderItems'));  //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->input());
        $request->validate([
            "user_id" => ["required"],
            "total" => ["required"],
            "order_items" => ['required', 'array'],
            "order_items.*.quantity" => ['required'],
            "order_items.*.product_id" => ['required'],
            "order_items.*.price" => ['required'],
        ]);


        DB::beginTransaction();
        $order = OrderItem::create([
            'user_id' => $request->input("user_id"),
            'total' => $request->input('total'),
        ]);

        $order->save();

        foreach ($request->input("order_items") as $item) {
            $order->items()->create(collect($item)->merge([
                "user_id" => $request->input("user_id"),
            ])->toArray());
        }
        DB::commit();
        $request->session()->forget('cart');
        $request->session()->forget('total');
        return redirect(route('cart'));




        //dd($date);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        $items = Item::where('order_item_id', '=', $orderItem->id)->get();
        return view('admin.orders.show', compact('orderItem', 'items'));  //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('orderItems.index')
            ->with('Success', 'Order deleted successfully');  //
    }
}
