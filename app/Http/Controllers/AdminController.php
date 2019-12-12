<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use Illuminate\Support\Facades\DB;
use Validator;

class AdminController extends Controller
{
    //
    function profile(Request $request){
        $uname=$request->session()->get('uname');
        //echo $uname;
        $user = User::where('username', $uname)
                ->first();
        //echo $user;
        return view('admin.index')->with('user', $user);
    }

    function editProfile(Request $request){
        $uname=$request->session()->get('uname');
        //echo $uname;
        $user = User::where('username', $uname)
                ->first();
        //echo $user;
        return view('admin.edit')->with('user', $user);
    }

    function editUser(Request $request){
        $uname=$request->session()->get('uname');
        $user = User::where('username', $uname)
                ->first();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->save();
        //echo $user;
        $request->session()->put('uname', $request->username);
        return redirect()->route('admin.profile'); 
    }

    function list(){

        $users = DB::table('users')->get();
    	return view('admin.userlist')->with('users', $users);
    }

    function deleteuser($id){


        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('admin.userlist');


    }
}

