<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\User;

class menuController extends Controller
{   
    public function store(Request $request){

        // $imageUrl = cloudinary()->upload($request->file('Image')->getRealPath())->getSecurePath();
        $item = menu::create([
            'Title' => $request -> Title,
            'Description' => $request -> Description,
            'Image' => $request -> Image,
            // 'Image' => $imageUrl,
            'Price' =>$request -> Price,
            'user_id'=>$request -> user_id,
           
        ]);
        return $item;
    }

    public function index(){
        $items = menu::all();
        return $items;
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
        $item = menu::find($id);
        $input = $request->all();
        $item-> update($input);
        return $item;
    }

    // public function getUsermenu($userId){
    //     $items = User::find($userId)->items;
    //     foreach($items as $item){
    //       $item = menu::all();
    //       return $item;
    //     }
    // }
}
