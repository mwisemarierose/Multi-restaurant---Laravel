<?php

namespace App\Http\Controllers;

use App\Models\requests;
use Illuminate\Http\Request;

class requestsController extends Controller
{
    
    public function store(Request $request){

        $createRequests = requests::create([
            'Name'=>$request->Name,
            'Email'=>$request->Email,
            'Address'=>$request->Address,
            'Description'=>$request->Description,
            'Status' => 'Pending'
        ]);
        $res = [
            'message' => 'request Created Successfully',
            'data' => $createRequests
        ];
        return Response()->json($res, 200);
    }
    public function index(){

        $requestss = requests::all();
        $res = [
            'message' => 'Retrieved',
            'data' => $requestss
        ];
        return Response()->json($res, 200);
       
    }
    
    public function show($id){
        $partner = requests::find($id);
        $res = [
            'message' => 'Retrieved',
            'data' => $partner
        ];
        return Response()->json($res, 200);
    }

    public function edit($id){
        $partner = requests::find($id);
        $res = [
            'message' => 'Retrieved',
            'data' => $partner
        ];
        return Response()->json($res, 200);

    }

    public function destroy($id){
        $partner = requests::destroy($id);
        $res = [
            'message' => 'Request deleted successfully',
            'data' => $partner
        ];
        return Response()->json($res, 200);

    }

    public function update(Request $request,$id){
        $requests = requests::find($id);
        $input = $request->all();
        $requests -> update($input);
        $res = [
            'message' => 'Request Updated successfully',
            'data' => $input
        ];
        return Response()->json($res, 200);

    }
    public function approveRequest($id){
        $requests = requests::find($id);
        $requests->Status="Approved";
        $requests->save();
        $res = [
            'message' => 'Request Approved successfully',
            'data' => $requests
        ];
        return Response()->json($res, 200);

    }
    public function rejectRequest($id){
        $requests = requests::find($id);
        $requests->Status="Rejected";
        $requests->save();
        $res = [
            'message' => 'Request Rejected successfully',
            'data' => $requests
        ];
        return Response()->json($res, 200);

    }

    public function approvedRequest(){
        $approved= requests::where('Status','Approved')->get();
        return $approved;
        
    }
    
}
