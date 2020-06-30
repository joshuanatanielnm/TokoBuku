<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use File;


class anggotaController extends Controller
{
    public function index() {
    	// mengambil data dari table anggota
    	$anggota = DB::table('anggota')->get();

    	// mengirim data anggota ke view index
    	return view('anggota.anggota',['anggota' => $anggota]);

    }
    public function update($id){
        $anggota = DB::table('anggota')->where('id_anggota', $id)->get();

        return view('anggota.update', ['anggota' => $anggota]);
    }


    public function hapus($id){
        DB::table('anggota')->where('id_anggota', $id)->delete();
        return redirect('/anggota');
    }

    public function tambah(){
        return view('anggota.tambah');
    }

    public function updated(Request $request){

        $file = $request->file('file');

        if($request->file){
            $tujuan_upload = 'upload/fotoanggota';

            $file->move($tujuan_upload,$file->getClientOriginalName());

            $default = DB::table('anggota')->where('id_anggota', $request->id)->first();
            File::delete('upload/fotoanggota/'.$default->foto_anggota);

            $image = $file->getClientOriginalName();
        }
        else{
            $default = DB::table('anggota')->where('id_anggota', $request->id)->first();
            $image = $default->foto_anggota;
        }

        DB::table('anggota')->where('id_anggota',$request->id)->update([
            'nama_anggota' => $request->nama,
            'alamat_anggota' => $request->alamat,
            'notelp_anggota' => $request->notelp,
            'foto_anggota' =>  $image,
        ]);

        return redirect('/anggota');
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
        return redirect('/anggota');
    }
}
