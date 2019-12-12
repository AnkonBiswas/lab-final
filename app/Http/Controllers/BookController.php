<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use App\Cart;
use Illuminate\Support\Facades\DB;
use Validator;
class BookController extends Controller
{
    function list(){

        $books = DB::table('books')->get();
    	return view('book.booklist')->with('books', $books);
    }

    function deletebook($id){


        DB::table('books')->where('id', $id)->delete();

        return redirect()->route('book.list');

    }

    function addbook(){
        return view('book.addbook');
    }
    function storebook(Request $request){
		Validator::make($request->all(), [
			'bookname' => 'required|unique:books',
            'author' => 'required',
            'category' => 'required|',
			'price' => 'required',
		])->validate();


		
		//$request->session()->flash('msg', 'Input Data can Not Be null');
        $book = new Book();
        $book->bookname = $request->bookname;
        $book->author =$request->author;
        $book->category =$request->category;
        $book->price =$request->price;

        if($book->save()){
            return redirect()->route('book.list');
        }else{
            return redirect()->route('book.add');
        }
    
       }

       function listcust(){
        $novel = DB::table('books')->where ('category','Novel')->get();
        $literature = DB::table('books')->where ('category','literature')->get();
        $scifi = DB::table('books')->where ('category','scifi')->get();
        $adventure = DB::table('books')->where ('category','adventure')->get();

    	return view('customer.viewbook')->with('novel', $novel)->with('literature', $literature)->with('scifi', $scifi)->with('adventure', $adventure);
    } 


    function addtocart(Request $request, $id){
	
        //$request->session()->flash('msg', 'Input Data can Not Be null');
        $book=DB::table('books')->where('id', $id)->get();

        
        
        $cart = new Cart();
        $cart->id = $book[0]->id;
        $cart->bookname = $book[0]->bookname;
        $cart->author =$book[0]->author;
        $cart->category =$book[0]->category;
        $cart->price =$book[0]->price;

        if($cart->save()){
            return redirect()->route('customer.cart');
        }else{
            return redirect()->route('book.add');
        }
       
    
       }


    
}
