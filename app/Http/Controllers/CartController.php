<?php

namespace App\Http\Controllers;

use Image;
use App\Order;
use App\Carwash;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{
    public function create($id)
    {
        $product=Product::where('id',$id)->first();
        return view("cart.create",["product"=>$product]);
    }
    public function save(Request $request)
    {
        // dd('kdkdk');
        $this->validator($request->all())->validate();
        $product=Product::where('id',$request->product_id)->orderBy('id','Desc')->first();
        // $orders=Order::with('products')->where("user_id",Auth::user()->id)->where("status",0)->get();
        $data=new Order();
        $data->user_id=Auth::user()->id;
        $data->product_id=$request->product_id;
        $data->quantity=$request->quantity;
        $data->amount=($request->quantity)*($product->p_price);
        $data->address=$request->address;
        $data->phone_no=$request->number;
        $data->save();
        return redirect()->route('cart');
    }
    public function index()
    {
        // dd('kdk');
        $orders=Order::with('products')->where("user_id",Auth::user()->id)->where("status",0)->get();
       
        return view("cart.index",["orders"=>$orders]);
    }
    public function edit($id)
    {
        $order=Order::with('products')->where('id',$id)->first();
        return view("cart.edit",["order"=>$order]);
    }
    public function update(Request $request)
    {
        // $this->validator($request->all())->validate();
        
        $product=Product::where('id',$request->product_id)->first();
        $data=Order::where('id',$request->id)->first();
        $data->user_id=Auth::user()->id;
        $data->product_id=$request->product_id;
        $data->quantity=$request->quantity;
        $data->amount=($request->quantity)*($product->p_price);
        $data->address=$request->address;
        $data->phone_no=$request->number;
        $data->save();
        return redirect()->route('cart');
    }
    public function delete($id)
    {
        $bfaccounts = Order::findOrFail($id);
        $bfaccounts->delete();
         return redirect()->route('cart');
    }


    protected function validator(array $data)
    {
      
        return Validator::make($data, [
            'quantity' => 'required|max:255',
            'number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
    }
}