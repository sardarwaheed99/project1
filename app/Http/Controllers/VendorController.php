<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Vendor;
class VendorController extends Controller
{
public function index()
{
    $vendor=Vendor::all();
    return view("vendor.index",["vendor"=>$vendor]);
}
public function create()
{
    return view("vendor.create");

}
public function save(Request $request)
{
    $this->validate($request, [
            
        'name' => 'required|max:100|',
        
    

    ]);
    $vendor=new Vendor();
    $vendor->name=$request->name;
    $vendor->address=$request->address;
    $vendor->number=$request->number;
    $vendor->save();
    return redirect()->route('vendor');
}
public function edit($id)
{
    $vendor=Vendor::where('id',$id)->first();
    return view("vendor.edit",["vendor"=>$vendor]);
}
public function update(Request $request)
{
    
    $this->validate($request, [
            
        'name' => 'required|max:100|',
        
    

    ]);
    $vendor=Vendor::where('id',$request->id)->first();
    $vendor->name=$request->name;
    $vendor->address=$request->address;
    $vendor->number=$request->number;
    $vendor->save();
    return redirect()->route('vendor');

}
public function delete($id)
{
    $bfaccounts = Vendor::findOrFail($id);
    $bfaccounts->delete();
     return redirect()->route('vendor');
}
}