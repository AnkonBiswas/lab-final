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
			echo "success";
			//return redirect()->route('home.index');
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


		if($validation->fails()){
            return redirect()->route('login.register');
		}
		//$request->session()->flash('msg', 'Input Data can Not Be null');
        $user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->role =1;

        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('login.add');
        }
    
       }

	   function allload(){

		$users = DB::table('users')
		->get();
	
	
		return view('user.load')->with('cates', $users);
	}
		function load($id){
			$users = DB::table('users')
				->where('username','like', "%$id%")
				->get();
	
	
				return view('user.load')->with('cates', $users);
		}
}


