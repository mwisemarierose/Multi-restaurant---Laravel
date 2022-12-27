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
      
        return redirect('/menu/getAll');

    }

    public function index(){
        $items = menu::all();
        return view('frontend.restaurant.Restaurant_menu')->with('items',$items);
    }
    public function FindAll(){
        $item = menu::where('user_id',auth()->user()->id)->get();
        
        return view('frontend.dashboard.tables.product')->with('items',$item);
    }
    
    
    public function show($id){
        $item = menu::find($id);
        return view('frontend.restaurant.order')->with('items',$item);

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
       $menu = menu::where('user_id',$userId)->get();
       return view('frontend.restaurant.Restaurant_menu')->with('menus',$menu);

    }
    // public function Usermenu($userId){
    //     $product = menu::where('user_id',$userId)->get();
    //     return view('frontend.dashboard.tables.product')->with('products',$product);
    //  }
}
