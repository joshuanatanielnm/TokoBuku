@extends('table')


@section('content')
<div class="flex justify-center mt-10">
    <a href="/admin/tambah" class="font-medium p-4 rounded bg-green-400 text-white font-bold">Tambah Admin</a>
</div>
<div class="flex justify-center mt-5">
    <table class="table-auto">
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
            @foreach($admin as $p)
            <tr class="font-bold">
                <td class="border px-4 py-2">{{$id}}</td>
                <td class="border px-4 py-2"><img class="w-48" src="{{asset('upload/fotoAdmin/'.$p->foto_admin)}}" alt=""></td>
                <td class="border px-4 py-2">{{$p->nama_admin}}</td>
                <td class="border px-4 py-2">{{$p->alamat_admin}}</td>
                <td class="border px-4 py-2">{{$p->notelp_admin}}</td>
                <td class="border px-4 py-2">
                    <a href="/admin/update/{{ $p->id_admin }}" class=" p-2 rounded bg-green-400 font-bold text-white">Update</a>
                    <a href="/admin/hapus/{{ $p->id_admin }}" class=" p-2 rounded bg-red-600 font-bold text-white">Hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
            @endforeach
        </tbody>
    </table>
    <div class="list-none">
    <div class="bg-red-400 p-4 font-medium ">
        {{ $admin->links() }}
    </div>
</div>
</div>
@endsection
