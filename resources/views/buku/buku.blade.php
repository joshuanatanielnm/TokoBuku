
@extends('table')


@section('content')
{{Session::get('id')}}
<div class="flex justify-center mt-10">
    <a href="/buku/tambah" class="font-medium p-4 rounded bg-green-400 text-white font-bold">Tambah Buku</a>
</div>
<div class="flex justify-center mt-5">


    <table class="table-auto font-bold">
        <thead>
            <tr class="bg-blue-400 text-white text-center">
                <th class="px-4 py-2">ID Buku</th>
                <th class="px-4 py-2">ID Admin</th>
                <th class="px-4 py-2">Foto</th>
                <th class="px-4 py-2">Judul Buku</th>
                <th class="px-4 py-2">Pengarang Buku</th>
                <th class="px-4 py-2">Stok Buku</th>
                <th class="px-4 py-2">Kategori Buku</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1 ?>
            @foreach($buku as $p)
            <tr class="text-center">
                <td class="border px-4 py-2">{{$id}}</td>
                <td class="border px-4 py-2">{{$p->id_admin}}</td>
                <td class="border px-4 py-2"><img class="w-48" src="{{asset('upload/fotobuku/'.$p->foto_buku)}}" alt=""></td>
                <td class="border px-4 py-2">{{$p->judul_buku}}</td>
                <td class="border px-4 py-2">{{$p->pengarang_buku}}</td>
                <td class="border px-4 py-2">{{$p->stok_buku}}</td>
                <td class="border px-4 py-2">{{$p->kategori_buku}}</td>
                <td class="border px-4 py-2">
                    <a href="/buku/update/{{ $p->id_buku }}" class=" p-2 rounded bg-green-400 font-bold text-white">Update</a>
                    <a href="/buku/hapus/{{ $p->id_buku }}" class=" p-2 rounded bg-red-600 font-bold text-white">Hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
