<?php

namespace App\Http\Controllers;

use Image;
use App\Carwash;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CarwashController extends Controller
{
    public function index()
    {
        if(Auth::user()->admin == 0)
        {
        
        $data=Carwash::where('user_id',Auth::user()->id)->get();
        
        return view("carwash.index",["data"=>$data]);
        }
        else{
            $data=Carwash::get();
            
        
            return view("carwash.index1",["data"=>$data]);
    
        }
    }
    public function create()
    {
        return view("carwash.create");
    }
    public function save(Request $request)
    {
        
    $this->validate($request, [
            
        'address' => 'required|max:100|',
        'number' => 'required|max:100|',
        'date' => 'required|max:100|',
        'time' => 'required|max:100|',
        
    

    ]);
    $data=New Carwash();
    $data->user_id=Auth::user()->id;
    $data->address=$request->address;
    $data->date=$request->date;
    $data->phone_no=$request->number;
    $data->time=$request->time;
    $data->save();
    return redirect()->route('carwash');
    }
    public function edit($id)
    {
        $data=Carwash::where('id',$id)->first();
        return view("carwash.edit",["data"=>$data]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            
            'address' => 'required|max:100|',
            'number' => 'required|max:100|',
            'date' => 'required|max:100|',
            'time' => 'required|max:100|',
            
        
    
        ]);
        $data=Carwash::where('id',$request->id)->first();
        $data->user_id=Auth::user()->id;
        $data->address=$request->address;
        $data->date=$request->date;
        $data->phone_no=$request->number;
        $data->time=$request->time;
        $data->save();
        return redirect()->route('carwash');
    }
    
    public function delete($id)
    {
        $bfaccounts = Carwash::findOrFail($id);
        $bfaccounts->delete();
         return redirect()->route('carwash');
    }

    
}