<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class adminController extends Controller
{
    public function index() {
    	// mengambil data dari table admin
    	$admin = DB::table('admin')->get();

    	// mengirim data admin ke view index
    	return view('admin.admin',['admin' => $admin]);

    }
    public function update($id){
        $admin = DB::table('admin')->where('id_admin', $id)->get();

        return view('admin.update', ['admin' => $admin]);
    }


    public function hapus($id){
        DB::table('admin')->where('id_admin', $id)->delete();
        return redirect('/admin');
    }

    public function tambah(){
        return view('admin.tambah');
    }

    public function updated(Request $request){

        DB::table('admin')->where('id_admin',$request->id)->update([
            'nama_admin' => $request->nama,
            'alamat_admin' => $request->alamat,
            'notelp_admin' => $request->notelp
        ]);

        return redirect('/admin');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'notelp' => 'required|numeric'
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'upload/fotoAdmin';

        $file->move($tujuan_upload,$file->getClientOriginalName());

        DB::table('admin')->insert([
            'foto_admin' => $file->getClientOriginalName(),
            'nama_admin' => $request->nama,
            'alamat_admin' => $request->alamat,
            'notelp_admin' => $request->notelp,
            'username_admin' => $request->username,
            'password_admin' => $request->password,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/admin');
    }
}
