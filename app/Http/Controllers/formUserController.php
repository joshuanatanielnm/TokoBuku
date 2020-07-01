<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class formUserController extends Controller
{
    public function formlogin() {
    	return view('formLoginUser');
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = DB::table('anggota')->where('username_anggota', $username)->where('password_anggota', $password)->first();

        if($data){
            Session::put('id',$data->id_anggota);
            Session::put('login',TRUE);
            Session::put('hide',TRUE);

            return redirect('/');
        }
        else{
            return redirect('/formloginUser')->with('alert', 'Password atau Email anda salah');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/formloginUser')->with('alert','Kamu sudah logout');
    }

}
