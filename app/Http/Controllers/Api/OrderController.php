<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function getOrders(){

        $fetch_order = Order::OrderBy('created_at', 'desc')->get();

        return response()->json($fetch_order);

    }

    public function addOrders(Request $request){

        $create_order = Order::create($request->all());
        $products_ids =[1,2];
        $create_order->products()->attach($products_ids);

        return response()->json($create_order);
    }

    public function updateOrder(Order $order){
        $upd_order= $order->update([
            'order_number' => request('order_number'),
        ]);

        return response()->json(["Order Updated Successifully" => $upd_order]);
    }

    public function delOrders($id)
    {
        $del_order = Order::destroy($id);

        return response()->json(["Order Deleted Successifully" => $del_order]);
    }
}
