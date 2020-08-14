<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
use App\Carwash;
use Auth;
use App\Order;
class OrderController extends Controller
{
    public function create($id)
    {
        $order=Order::where('id',$id)->first();
        $order->status=1;
        $order->save();
        return redirect()->route('order');
       
    }
    public function index()
    {
        if(Auth::user()->admin==0)
        {
        $orders=Order::with('products')->where("user_id",Auth::user()->id)->where("status",1)->get();
       
        return view("order.index",["orders"=>$orders]);
        }
        else{
            $orders=Order::with('products','users')->where("status",1)->get();
       
            return view("order.index1",["orders"=>$orders]);
        }
    }
    public function edit($id)
    {
        if(Auth::user()->admin==0)
        {
        $order=Order::with('products')->where('id',$id)->first();
        
        return view("order.edit",["order"=>$order]);
        }
        else{
            $order=Order::with('products')->where('id',$id)->first();
        
        return view("order.edit1",["order"=>$order]);
        }
    }
    public function update(Request $request)
    {
        if(Auth::user()->admin==0)
        {
        $product=Product::where('id',$request->product_id)->first();
        $data=Order::where('id',$request->id)->first();
        $data->user_id=Auth::user()->id;
        $data->product_id=$request->product_id;
        $data->quantity=$request->quantity;
        $data->amount=($request->quantity)*($product->p_price);
        $data->address=$request->address;
        $data->phone_no=$request->number;
        $data->save();
        }
        else{
            $data=Order::where('id',$request->id)->first();
            $data->level=$request->level;
            $data->save();
        }
        return redirect()->route('order');
    }
    public function delete($id)
    {
        $bfaccounts = Order::findOrFail($id);
        $bfaccounts->delete();
         return redirect()->route('order');
    }
}