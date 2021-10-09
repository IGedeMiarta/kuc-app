<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  
    public function loginview(){
        $data['title'] = 'Login';
        return view('layouts.auth.loginmain',$data);
    }
    public function authlogin(Request $request){
        $rules = [
            'username' =>'required',
            'password'=>'required'
        ];
        $rs = $request->validate($rules);
        
    }
    public function lockscreen(){
        $data['title'] = 'Lock Screen';
        return view('layouts.auth.lockscreen',$data);
    }
}
