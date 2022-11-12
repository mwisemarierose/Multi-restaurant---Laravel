<?php

namespace App\Http\Controllers;

use App\Models\requests;
use Illuminate\Http\Request;

class requestsController extends Controller
{
    //
    public function store(Request $request){

        $createRequests = requests::create([
            'Name'=>$request->Name,
            'Email'=>$request->Email,
            'Address'=>$request->Address,
            'Description'=>$request->Description
        ]);
        return $createRequests;
    }
    public function index(){

        $requestss = requests::all();
        return $requestss;
    }
    
    public function show($id){
        $patner = requests::find($id);
        return $patner;
    }

    public function edit($id){
        $patner = requests::find($id);
        return $patner;
    }

    public function destroy($id){
        $patner = requests::destroy($id);
        return $patner;
    }

    public function update(Request $request,$id){
        $requests = requests::find($id);
        $input = $request->all();
        $requests -> update($input);
        return $requests;
    }
}
