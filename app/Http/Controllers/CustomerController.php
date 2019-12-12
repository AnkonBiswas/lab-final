<?php

namespace App\Http\Controllers;
use App\User;
use App\Book;
use App\Cart;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function cart(){

        $cart = DB::table('carts')->get();
    	return view('customer.cart')->with('cart', $cart);
    }
}
