@extends('table')

@section('content')
<div class="update">
    <h3 class="text-center text-xl font-medium mt-10">Update Data buku</h3>

    <div class="flex justify-center mt-5">
        @foreach ($buku as $p)
        <form action="/buku/updated" method="post" class="flex justify-center w-2/5" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ $p->id_buku }}">

            {{ csrf_field() }}
            <div>
                <label class="text-grey-darker text-sm font-bold mb-2" for="judul">Judul buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="judul" id="judul" type="text" placeholder="Judul buku" value="{{$p->judul_buku}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="idadmin">Id admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="idadmin" id="idadmin" type="text" placeholder="Id Admin" value="{{$p->id_admin}}" readonly>

                <label class="text-grey-darker text-sm font-bold mb-2" for="pengarang">Pengarang Buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="pengarang" id="pengarang" type="pengarang" placeholder="Pengarang buku" value="{{$p->pengarang_buku}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="stok">Stok</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="stok" id="stok" type="text" placeholder="Stok buku" value="{{$p->stok_buku}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="kategori">kategori buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="kategori" id="kategori" type="text" placeholder="Kategori" value="{{$p->kategori_buku}}">

                <label class="text-grey-darker text-sm font-bold mb-2" for="file">Foto buku</label>
                <img class="w-48" src="{{asset('upload/fotobuku/'.$p->foto_buku)}}" alt="">
                <br>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="file" id="file" type="file" placeholder="Upload Your Photo">

                <input type="submit" value="Simpan Data" class="py-3 px-4 rounded-lg bg-green-400 font-medium ">

            </div>
        </form>
        @endforeach

    </div>
</div>
@endsection
