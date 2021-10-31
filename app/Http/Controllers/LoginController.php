<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $data['title']='Login';
        return view('layouts.auth.loginmain',$data);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
       

        if (Auth::attempt($credentials)) {
            // $user = User::where('username',$request->username)->first();
            // $pegawai = Pegawai::where('NIP',$user->NIP)->get(['Nama','KodeJabatan'])->first();
            
           
            $request->session()->regenerate();

            // $request->session()->put('nama', $pegawai->Nama);
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','Login Gagal');
    }
    public function logout(Request $request){
       
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
