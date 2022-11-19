<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\User;

class menuController extends Controller
{   
    public function store(Request $request){

        $imageUrl = cloudinary()->upload($request->file('Image')->getRealPath())->getSecurePath();
        $item = menu::create([
            'Title' => $request -> Title,
            'Description' => $request -> Description,
            'Image' => $imageUrl,
            'Price' =>$request -> Price,
            'user_id'=>$request -> user_id,
            'quantity' =>$request ->quantity
        ]);
        return $item;
    }

    public function index(){
        $items = menu::all();
        return view('frontend.restaurant.restaurant_menu')->with('items',$items);
    }
    
    public function show($id){
        $item = menu::find($id);
        return $item;
    }

    public function destroy($id){
        $item = menu::destroy($id);
        $response="item deleted";
        return response($item);
    }

    public function update(Request $request,$id){
        $Menu = menu::find($id);
        $input = $request->all();
        $Menu-> update($input);
        return $Menu;
    }

    public function getUsermenu($userId){
       $items = menu::where('user_id',$userId)->get();
        return $items;
    }
}
