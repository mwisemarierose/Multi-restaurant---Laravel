<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\mail\MailNotify;
use Illuminate\Support\Facades\Auth ;
use Spatie\Permission\Models\permission;
use Spatie\Permission\Models\Roles;



class Usercontroller extends Controller
{
    //
    public function store(Request $request){
        $imageUrl = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        $createUser = User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'image' => $imageUrl,
            'phoneNumber'=>$request->phoneNumber,
            'role' => 'client',
            'requests_id'=>'1',
            'password'=>Hash::make($request->password)
        ]);
        $createUser->assignRole('client');
        // $data = [
        //     'subject'=>'Electronics shop mail',
        //     'body'=>'this is the email test'
        // ];
        // Mail::to($request['email'])->send(new MailNotify($data));
        return redirect()->intended('/login');

    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)  && auth()->user()->role=='client') {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        if(Auth::attempt($credentials) && auth()->user()->role=='Manager')
          {
            return redirect()->intended('/Manager');
            }
            if(Auth::attempt($credentials)&& auth()->user()->role=='super-admin')
          {
            return redirect()->intended('/Admin');
            }
      else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}
    public function index(){

        $users = User::all();
        // return $users;
        return view('frontend.dashboard.tables.usersTable')->with('user',$users);
        
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
        // return $manager;
        return view('frontend.dashboard.tables.managerTable')->with('managers',$manager);

        
    }
    public function client(){
        $client = User::where('role','client')->get();
        // return $client; 
        return view('frontend.dashboard.tables.usertable')->with('clients',$client);

        // return $client;
        
    }
}
