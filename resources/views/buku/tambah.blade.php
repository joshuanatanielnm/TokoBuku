@extends('table')

@section('content')

<div class="tambah"></div>

    <h3 class="text-center text-xl font-medium mt-10">Tambah Data buku</h3>

    <div class="flex justify-center mt-5">
        <form action="/buku/store" method="post" class="flex justify-center w-2/5" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div>
                <label class="text-grey-darker text-sm font-bold mb-2" for="judul">Judul buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="judul" id="judul" type="text" placeholder="Judul buku">

                <label class="text-grey-darker text-sm font-bold mb-2" for="idadmin">Id admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="idadmin" id="idadmin" type="text" placeholder="Id Admin" value="{{Session::get('id_admin')}}" readonly>

                <label class="text-grey-darker text-sm font-bold mb-2" for="pengarang">Pengarang Buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="pengarang" id="pengarang" type="pengarang" placeholder="Pengarang buku">

                <label class="text-grey-darker text-sm font-bold mb-2" for="stok">Stok</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="stok" id="stok" type="number" placeholder="Stok buku">

                <label class="text-grey-darker text-sm font-bold mb-2" for="kategori">kategori buku</label>
                <select name="kategori" id="kategori" class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                    <option value="">--Pilih Kategori--</option>
                    <option value="pengetahuan">pengetahuan</option>
                    <option value="novel">novel</option>
                    <option value="komik">komik</option>
                </select>

                <label class="text-grey-darker text-sm font-bold mb-2" for="file">Foto buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="file" id="file" type="file" placeholder="Upload Your Photo">

                <input type="submit" value="Simpan Data" class="py-3 px-4 rounded-lg bg-green-400 font-medium ">

            </div>
        </form>
    </div>
</div>
@endsection
