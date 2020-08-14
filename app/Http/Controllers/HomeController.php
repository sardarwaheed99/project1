<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Comment;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
      //  dd($data);

        return view('home',compact('data'));
    }
    public function product($id)
    {
        //dd
        $data=Product::where('id',$id)->first();
        //dd($data)
        $comments=Comment::where('product_id',$id)->get();
        return view('single',["data"=>$data,
        "comments"=>$comments,
        
        ]);

    }
    public function comment(Request $request)
    {
        $comment=new Comment();
        $comment->user_id=Auth::user()->id;
        $comment->product_id=$request->product_id;
        $comment->comment=$request->comment;
        $comment->save();
        return redirect()->route('product-view',$request->product_id);

    }
   
}
