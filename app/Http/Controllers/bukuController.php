<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use File;


class bukuController extends Controller
{
    public function index() {
        if(!Session::get('login')){
            return redirect('formloginAdmin')->with('alert','Kamu harus login dulu');
        }
    	// mengambil data dari table buku
    	$buku = DB::table('buku')->get();

    	// mengirim data buku ke view index
    	return view('buku.buku',['buku' => $buku]);

    }
    public function update($id){
        $buku = DB::table('buku')->where('id_buku', $id)->get();

        return view('buku.update', ['buku' => $buku]);
    }


    public function hapus($id){
        DB::table('buku')->where('id_buku', $id)->delete();
        return redirect('/buku');
    }

    public function tambah(){
        return view('buku.tambah');
    }

    public function updated(Request $request){

        $file = $request->file('file');

        if($request->file){
            $tujuan_upload = 'upload/fotobuku';

            $file->move($tujuan_upload,$file->getClientOriginalName());

            $default = DB::table('buku')->where('id_buku', $request->id)->first();
            File::delete('upload/fotobuku/'.$default->foto_buku);

            $image = $file->getClientOriginalName();
        }
        else{
            $default = DB::table('buku')->where('id_buku', $request->id)->first();
            $image = $default->foto_buku;
        }

        DB::table('buku')->where('id_buku',$request->id)->update([
            'nama_buku' => $request->nama,
            'alamat_buku' => $request->alamat,
            'notelp_buku' => $request->notelp,
            'foto_buku' =>  $image,
        ]);

        return redirect('/buku');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'notelp' => 'required|numeric'
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'upload/fotobuku';

        $file->move($tujuan_upload,$file->getClientOriginalName());

        DB::table('buku')->insert([
            'foto_buku' => $file->getClientOriginalName(),
            'nama_buku' => $request->nama,
            'alamat_buku' => $request->alamat,
            'notelp_buku' => $request->notelp,
            'username_buku' => $request->username,
            'password_buku' => $request->password,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/buku');
    }
}
