
@extends('table')


@section('content')

<div class="flex justify-center mt-10">
    <a href="/anggota/tambah" class="font-medium p-4 rounded bg-green-400 text-white font-bold">Tambah Anggota</a>
</div>
<div class="flex justify-center mt-5">
    <table class="table-auto font-bold">
        <thead>
            <tr class="bg-blue-400 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Foto</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">Nomer Telpon</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1 ?>
            @foreach($anggota as $p)
            <tr>
                <td class="border px-4 py-2">{{$id}}</td>
                <td class="border px-4 py-2"><img class="w-48" src="{{asset('upload/fotoanggota/'.$p->foto_anggota)}}" alt=""></td>
                <td class="border px-4 py-2">{{$p->nama_anggota}}</td>
                <td class="border px-4 py-2">{{$p->alamat_anggota}}</td>
                <td class="border px-4 py-2">{{$p->notelp_anggota}}</td>
                <td class="border px-4 py-2">
                    <a href="/anggota/update/{{ $p->id_anggota }}" class=" p-2 rounded bg-green-400 font-bold text-white">Update</a>
                    <a href="/anggota/hapus/{{ $p->id_anggota }}" class=" p-2 rounded bg-red-600 font-bold text-white">Hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
