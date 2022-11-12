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
        $createOrder = Order::create([
            'user_id'=>$request->user_id,
            'menu_id'=> $request-> menu_id,
            'quantity'=>$request->quantity,
            'amount'=>$request->amount,
            'status' => $request -> status
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
