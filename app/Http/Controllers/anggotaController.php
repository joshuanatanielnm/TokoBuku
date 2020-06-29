<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index() {
    	// mengambil data dari table angoota
    	$angoota = DB::table('angoota')->get();

    	// mengirim data angoota ke view index
    	return view('angoota.angoota',['angoota' => $angoota]);

    }
    public function update($id){
        $angoota = DB::table('angoota')->where('id_angoota', $id)->get();

        return view('angoota.update', ['angoota' => $angoota]);
    }


    public function hapus($id){
        DB::table('angoota')->where('id_angoota', $id)->delete();
        return redirect('/angoota');
    }

    public function tambah(){
        return view('angoota.tambah');
    }

    public function updated(Request $request){

        DB::table('angoota')->where('id_angoota',$request->id)->update([
            'nama_angoota' => $request->nama,
            'alamat_angoota' => $request->alamat,
            'notelp_angoota' => $request->notelp
        ]);

        return redirect('/angoota');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'notelp' => 'required|numeric'
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'upload/fotoangoota';

        $file->move($tujuan_upload,$file->getClientOriginalName());

        DB::table('angoota')->insert([
            'foto_angoota' => $file->getClientOriginalName(),
            'nama_angoota' => $request->nama,
            'alamat_angoota' => $request->alamat,
            'notelp_angoota' => $request->notelp,
            'username_angoota' => $request->username,
            'password_angoota' => $request->password,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/angoota');
    }
}
