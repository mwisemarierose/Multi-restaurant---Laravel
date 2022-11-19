<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\mail\MailNotify;

class Usercontroller extends Controller
{
    //
    public function store(Request $request){

        $createUser = User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'role' => 'client ',
            'password'=>Hash::make($request->password)
        ]);
        $data = [
            'subject'=>'Electronics shop mail',
            'body'=>'this is the email test'
        ];
        Mail::to($request['email'])->send(new MailNotify($data));
        return $createUser;

    }

    public function login(Request $request){

        $loginUser = $request-> validate([
            'email' => 'required|string',
            'password' => 'required|string',
            
        ]);
        $user = User :: where('email', $loginUser['email'])-> first();
        if(!$user || !Hash:: check($loginUser['password'], $user -> password)){
            return response(["message"=>"wrong credentials"],401);
        };
        $token = $user -> createToken('fine')->plainTextToken;
        $response=[
            "user"=>$user,
            "token"=>$token
        ];
        return response($response ,200);
    }

    public function index(){

        $users = User::all();
        return $users;
        
    }
    
    public function show($id){
        $user = User::find($id);
        return $user;
    }

    public function destroy($id){
        $user = User::destroy($id);
        return $user;
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $input = $request->all();
        $user-> update($input);
        return $user;
    }
    public function manager(){
        $manager= User::where('role','Manager')->get();
        return $manager;
        
    }
    public function client(){
        $client = User::where('role','client')->get();
        return $client;
        
    }
}
