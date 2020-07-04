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

    public function formsignup(){
        return view('formSignupUser');
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = DB::table('anggota')->where('username_anggota', $username)->where('password_anggota', $password)->first();

        if($data){
            Session::put('id_anggota', $data->id_anggota);
            Session::put('loginAnggota',TRUE);

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


    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'notelp' => 'required|numeric'
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'upload/fotoanggota';

        $file->move($tujuan_upload,$file->getClientOriginalName());

        DB::table('anggota')->insert([
            'foto_anggota' => $file->getClientOriginalName(),
            'nama_anggota' => $request->nama,
            'alamat_anggota' => $request->alamat,
            'notelp_anggota' => $request->notelp,
            'username_anggota' => $request->username,
            'password_anggota' => $request->password,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/formloginUser');
    }



}
