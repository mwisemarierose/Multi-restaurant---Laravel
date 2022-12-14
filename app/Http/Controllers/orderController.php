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
        $order = Order::all();
        
        return view('frontend.dashboard.tables.ordertable')->with('orders',$order);

    }

    
    public function store(Request $request)
    {
        $me=menu::find($request-> menu_id);
        $amount=$me->Price*$request->quantity;
        $createOrder = Order::create([
            'user_id'=>$request->user_id,
            'menu_id'=> $request-> menu_id,
            'quantity'=>$request->quantity,
            'address' =>$request->address,
            'phoneNumber' =>$request->phoneNumber,
            'amount'=>$amount,
            'status' => 'pending'
        ]);
        $res = [
            'message' => 'Order created successfully',
            'data' => $createOrder
        ];
        $Menu = menu::find($request-> menu_id);
        $Menu->quantity=$Menu->quantity - $request->quantity;          
        $Menu-> save();
        return Response()->json($res, 200);
    }
    

    public function show($id)
    {
        $order = Order::find($id);
        return $order;
    }

   
    public function update(Request $request,$id){
        $order = Order::find($id);
        $input = $request->all();
        $order-> update($input);
        return $order;
    }

    
    public function destroy($id)
    {
        $order = requests::destroy($id);
        $res = [
            'message' => 'Order deleted successfully',
            'data' => $order
        ];
        return Response()->json($res, 200);
    }
}
