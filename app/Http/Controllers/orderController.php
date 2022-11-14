<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\user;
use App\Models\menu;


class OrderController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function store(Request $request)
    {
        $me=menu::find($request-> menu_id);
        $amount=$me->Price*$request->quantity;
        $createOrder = Order::create([
            'user_id'=>$request->user_id,
            'menu_id'=> $request-> menu_id,
            'quantity'=>$request->quantity,
            'amount'=>$amount,
            'status' => 'pending'
        ]);
        return $createOrder;
    }

    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
