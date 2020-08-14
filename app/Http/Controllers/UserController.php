<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use Image;
use Auth;
class UserController extends Controller
{
    public function index()
    {
        $data=User::where('admin',1)->get();
        return view("user.view",["data"=>$data]);
    }
    public function create()
    {
        return view("user.create");
    }
    public function save(Request $req)
    {
       // dd();
        $this->validate($req, [
            
            'name' => 'required|max:100|',
            
            'email' => 'required|max:100|unique:users',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3'

        ]);

        $user=new User;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password= bcrypt($req->password);
       if(Auth::user())
       {
        $user->admin='1';
       }
       $user->save();
       return redirect()->route('user-list');
    }
    public function delete($id)
    {
        $bfaccounts = User::findOrFail($id);
        $bfaccounts->delete();
         return redirect()->route('user-list');
    }
    public function edit($id)
    {
        $data=User::where('id',$id)->first();
        return view('user.edit',["data"=>$data]);
    }
    public function update(Request $req)
    {
        $this->validate($req, [
            
            'name' => 'required|max:100|',
            
           // 'email' => 'required|max:100|unique:users',
            
           'email' => ['required', 'max:100', Rule::unique('users')->ignore($req->id, 'id')],
           
        ]);
        $inputdata  =   $req->all();

        if (!empty($inputdata['password'])) {
            $this->validate($req, [
                'password' => 'required|min:3|confirmed',
                'password_confirmation' => 'required|min:3'
            ]);
        }

        $user=User::where('id',$req->id)->first();
       $user->name=$req->name;
       $user->email=$req->email;
       if (!empty($inputdata['password'])) {
        $user->password =    bcrypt($inputdata['password']);
    }

       if(Auth::user())
       {
        $user->admin='1';
       }
       $user->save();
       return redirect()->route('user-list');
    }
}