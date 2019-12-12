<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Validator;
class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
		//$users = User::all();
		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->first();

		if($user){
			$request->session()->put('uname', $request->input('username'));
			$request->session()->put('user', $user);
			return redirect()->route('admin.profile');
			//return view('admin.index')->with($user);
		}else{

			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}
	}

	function register(){
        return view('register.index');
    }
    function store(Request $request){
		Validator::make($request->all(), [
			'username' => 'required|unique:users',
			'password' => 'required',
		])->validate();


		
		//$request->session()->flash('msg', 'Input Data can Not Be null');
        $user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->role ='user';

        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('login.add');
        }
    
       }

	   

		
		
}


