<?php

namespace App\Http\Controllers;

use App\Models\requests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\mail\MailNotify;

class requestsController extends Controller
{
    
    public function store(Request $request){
        $imageUrl = cloudinary()->upload($request->file('Image')->getRealPath())->getSecurePath();
        $createRequests = requests::create([
            'Name'=>$request->Name,
            'Email'=>$request->Email,
            'Image' => $imageUrl,
            'Address'=>$request->Address,
            'Description'=>$request->Description,
            'Status' => 'Pending'
        ]);

        $res = [
            'message' => 'request Created Successfully',
            'data' => $createRequests
        ];
        return redirect()->intended('/');

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
        $request = requests::destroy($id);
        $res = [
            'message' => 'Request deleted successfully'
            
        ];
        return Response()->json($res, 200);

    }

    public function update(Request $request,$id){
        $requests = requests::find($id);
        $input = $request->all();
        $requests -> update($input);
        $res = [
            'message' => 'Request Updated successfully',
            'data' => $requests
        ];
        return Response()->json($res, 200);

    }
   
    public function approveRequest($id){
        $requests = requests::find($id);
        $requests->Status="Approved";
        $requests->save();

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 8; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $password=$randomString;

        $createUser = User::create([
            'username'=>$requests->Name,
            'email'=>$requests->Email,
            'role' => 'Manager',
            'password'=>Hash::make($password)
        ]);
        $createUser->assignRole('Manager');
        $data = [
            'subject'=>'Fine Food Restaurant',
            'body'=> $password
        ];
        Mail::to($requests['Email'])->send(new MailNotify($data));
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
        return view('frontend.restaurant.restaurants')->with('restaurants',$approved);
        
    }
    public function rejectedRequest(){
        $approved= requests::where('Status','Rejected')->get();
        return $approved;
        
    }
    
}
