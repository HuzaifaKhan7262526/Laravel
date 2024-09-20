<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser;

class UserController extends Controller
{
    public function user(){
        $users = MyUser::get();
        // return $users;
       return view("user.user-view", compact('users'));
    }

    public function user_create(){
        return view("user.user-create");
     }

     public function store(Request $req){

        $validate = $req->validate([
           "name" => "required",
           "email" => "required|email|unique:my_users",
           "phone_number" => "required",
           "address"  => "required",
        ]);

        if ($validate){
            $user = MyUser::create([
            "name" => $req->name,
            "email" => $req->email,
            "phone_number" => $req->phone_number,
            "address" => $req->address,
            ]);
            return redirect()->route('user.view');
        }else {
           return redirect()->back();
     }
    }
}
