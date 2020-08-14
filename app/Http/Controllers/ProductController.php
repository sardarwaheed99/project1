<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Product;
use Image;
class ProductController extends Controller
{
    public function index()
    {
        
        $data=Product::all();        
        return view("home",["data"=>$data]);
    }
    public function client()
    {
        $data=Product::all();
        
        return view("product.index",["data"=>$data]);
    }
    public function create()
    {
        return view("product.create");
    }
    public function store(Request $request)
    {
       
        $product = new Product;
        $product->p_name=$request->name;
        $product->p_type=$request->type;
        $product->p_price=$request->price;
      $product->quantity=$request->quantity;
      $product->description=$request->description;
     
      if($request->hasFile('attachment'))
      {
      $image =  $request->file('attachment');
     
      
          
      $filename = time() .  '.' . $image->getClientOriginalExtension();
      $path = public_path('images/' . $filename);
      Image::make($image->getRealPath())->resize(200, 200)->save($path);
         
      $product->image=$filename;
      }
    
      
      
        $product->save();
        return redirect()->route('product-list');
    }
    public function delete($id)
    {
        $bfaccounts = Product::findOrFail($id);
        $bfaccounts->delete();
         return redirect()->route('product-list');
    }
    public function edit($id)
    {
        $data=Product::where('id',$id)->first();
        return view("product.edit",["data"=>$data]);
    }
    public function update(Request $request)
    {
        
        $this->validate($request, [
            
            'name' => 'required|max:100|',
            
            'type' => 'required|max:100',
            'price' => 'required',
            'quantity' => 'required'

        ]);
        $product=Product::where('id',$request->id)->first();
       
        $product->p_name=$request->name;
        $product->p_type=$request->type;
        $product->p_price=$request->price;
      $product->quantity=$request->quantity;
      $product->description=$request->description;

   //  dd($request->file);
      if($request->hasFile('attachment'))
      {

      $image =  $request->file('attachment');
     
      
          
      $filename = time() .  '.' . $image->getClientOriginalExtension();
      $path = public_path('images/' . $filename);
      Image::make($image->getRealPath())->resize(200, 200)->save($path);
         
      $product->image=$filename;
   // dd($product->image);
    }
     
      
      
        $product->save();
        return redirect()->route('product-list');
    
    }
}