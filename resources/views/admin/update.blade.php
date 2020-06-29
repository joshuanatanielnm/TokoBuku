@extends('table')

@section('content')
<div class="tambah"></div>

    <h3 class="text-center text-xl font-medium mt-10">Update Data Admin</h3>

    <div class="flex justify-center mt-5">
        @foreach ($admin as $p)
        <form action="/admin/updated" method="post" class="flex justify-center w-2/5" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $p->id_admin }}">

            {{ csrf_field() }}
            <div>
                <a href="/admin/" class="py-2 px-3 rounded-lg bg-blue-500 font-medium text-white">kembali</a>
                <br><br>
                <label class="text-grey-darker text-sm font-bold mb-2" for="nama">Nama Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="nama" id="nama" type="text" placeholder="Your name" value="{{$p->nama_admin}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="alamat">Alamat Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="alamat" id="alamat" type="text" placeholder="Your addres" value="{{$p->alamat_admin}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="notelp">Nomer Telephone Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="notelp" id="notelp" type="text" placeholder="Your Phone Number" value="{{$p->notelp_admin}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="file">Foto Admin Admin</label>
                <img class="w-48" src="{{asset('upload/fotoAdmin/'.$p->foto_admin)}}" alt="">
                <br>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="file" id="file" type="file" placeholder="Upload Your Photo">

                <input type="submit" value="Simpan Data" class="py-3 px-4 rounded-lg bg-green-400 font-medium ">

            </div>
        </form>
        @endforeach

    </div>
</div>
@endsection
