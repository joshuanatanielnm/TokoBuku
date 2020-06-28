@extends('table')


@section('content')
<div class="flex justify-center mt-10">
    <a href="/admin/tambah" class="font-medium p-4 rounded bg-green-400">Tambah admin</a>
</div>
<div class="flex justify-center mt-5">
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">id</th>
                <th class="px-4 py-2">foto</th>
                <th class="px-4 py-2">nama</th>
                <th class="px-4 py-2">alamat</th>
                <th class="px-4 py-2">nomer telpon</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($admin as $p)
            <tr>
                <td class="border px-4 py-2">{{$p->id_admin}}</td>
            <td class="border px-4 py-2"><img src="{{asset('upload/fotoAdmin/'.$p->foto_admin)}}" alt=""></td>
                <td class="border px-4 py-2">{{$p->nama_admin}}</td>
                <td class="border px-4 py-2">{{$p->alamat_admin}}</td>
                <td class="border px-4 py-2">{{$p->notelp_admin}}</td>
                <td class="border px-4 py-2">
                    <a href="/admin/update/{{ $p->id_admin }}">Update</a>
                    |
                    <a href="/admin/hapus/{{ $p->id_admin }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
