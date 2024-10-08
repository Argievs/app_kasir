<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showlogin()
    {
        if(Auth::check()){
            return redirect('/dashboard')->with('gagal', 'Anda Sudah Login!!');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::Attempt($data)){
            return redirect('/dashboard')->with('succes', 'Welcome!! Anda Berhasil Login');
        } else {
            return redirect('/')->with('gagal', 'Email atau Password yang Anda inputkan Salah!');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/')->with('succes', 'Anda Berhasil Logout');
    }
}
