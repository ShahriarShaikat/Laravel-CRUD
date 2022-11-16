<?php

namespace App\Http\Controllers;

use App\User; //to use the user Model
use Illuminate\Support\Facades\DB; //query builder

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(Request $request)
    {
        return view('login.index');
    }
    
    public function verify(Request $request)
    {
        $username=$request->username;
        $password=($request->password);
        
        
        $user=DB::table('users')
                ->where('username',$username)
                ->where('password',$password)
                ->first();
        
        if($user!=null)
        {
            $request->session()->put('username',$user->username);
            return redirect()->route('home.index');
        }
        else
        {
            $request->session()->flash('message','*Invalid Username or Password'); //flash data used for only one request and view for 2nd time
            return redirect()->route('login.index');
        }
    }
    
    
}
