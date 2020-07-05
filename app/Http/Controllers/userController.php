<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        // mengambil data dari table buku
    	$novel = DB::table('buku')->where('kategori_buku', 'novel')->take(5)->get();
    	$pengetahuan = DB::table('buku')->where('kategori_buku', 'pengetahuan')->take(5)->get();
    	$komik = DB::table('buku')->where('kategori_buku', 'komik')->take(5)->get();

    	// mengirim data buku ke view index
    	return view('index', ['novels' => $novel, 'pengetahuans' => $pengetahuan, 'komiks' => $komik]);
    }

    public function cart($id){

        $cart = DB::table('cart')->join('buku', 'cart.id_buku', '=', 'buku.id_buku')->join('anggota', 'cart.id_anggota', '=', 'anggota.id_anggota')->get();

    	$novel = DB::table('buku')->where('kategori_buku', 'novel')->take(5)->get();
        $carts = $cart->where('id_anggota', $id);

        return view('cart', ['carts' => $carts, 'novels'=>$novel]);

    }
    public function store($id_buku, $id_anggota){
        $buku = DB::table('buku')->where('id_buku', $id_buku)->get();

        $cart = DB::table('cart')->where('id_buku', $id_buku)->count();

        if($cart <= $buku->count()){
            DB::table('cart')->insert([
                'id_anggota' => $id_anggota,
                'id_buku' => $id_buku,
                'quantity' => 1
            ]);
        }

        return redirect('/');
    }

    public function delete($id_buku, $id_anggota){
        DB::table('cart')->where('id_cart', $id_buku)->delete();

        $cart = DB::table('cart')->join('buku', 'cart.id_buku', '=', 'buku.id_buku')->join('anggota', 'cart.id_anggota', '=', 'anggota.id_anggota')->get();

    	$novel = DB::table('buku')->where('kategori_buku', 'novel')->take(5)->get();
        $carts = $cart->where('id_anggota', $id_anggota);

        // return view('/cart', ['carts' => $carts, 'novels'=>$novel]);

        return redirect('cart/'.$id_anggota);
    }
}
