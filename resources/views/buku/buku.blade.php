@extends('table')


@section('content')
{{Session::get('id')}}
<div class="flex justify-center mt-10">
    <a href="/buku/tambah" class="font-medium p-4 rounded bg-green-400">Tambah buku</a>
</div>
<div class="flex justify-center mt-5">
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">id buku</th>
                <th class="px-4 py-2">id admin</th>
                <th class="px-4 py-2">foto</th>
                <th class="px-4 py-2">judul buku</th>
                <th class="px-4 py-2">pengarang buku</th>
                <th class="px-4 py-2">kategori buku</th>
                <th class="px-4 py-2">stok buku</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1 ?>
            @foreach($buku as $p)
            <tr>
                <td class="border px-4 py-2">{{$id}}</td>
                <td class="border px-4 py-2">{{$p->id_admin}}</td>
                <td class="border px-4 py-2"><img class="w-48" src="{{asset('upload/fotobuku/'.$p->foto_buku)}}" alt=""></td>
                <td class="border px-4 py-2">{{$p->judul_buku}}</td>
                <td class="border px-4 py-2">{{$p->pengarang_buku}}</td>
                <td class="border px-4 py-2">{{$p->stok_buku}}</td>
                <td class="border px-4 py-2">{{$p->kategori_buku}}</td>
                <td class="border px-4 py-2">
                    <a href="/buku/update/{{ $p->id_buku }}">Update</a>
                    |
                    <a href="/buku/hapus/{{ $p->id_buku }}">Hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
