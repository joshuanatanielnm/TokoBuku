@extends('table')

@section('content')

<div class="tambah"></div>

    <h3 class="text-center text-xl font-medium mt-10">Tambah Data buku</h3>

    <div class="flex justify-center mt-5">
        <form action="/buku/store" method="post" class="flex justify-center w-2/5" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div>

                <label class="text-grey-darker text-sm font-bold mb-2" for="username">Username buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="username" id="username" type="text" placeholder="Your Phone Number">

                <label class="text-grey-darker text-sm font-bold mb-2" for="password">Password buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="password" id="password" type="password" placeholder="Your Phone Number">

                <label class="text-grey-darker text-sm font-bold mb-2" for="nama">Nama buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="nama" id="nama" type="text" placeholder="Your name">

                <label class="text-grey-darker text-sm font-bold mb-2" for="alamat">Alamat buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="alamat" id="alamat" type="text" placeholder="Your addres">

                <label class="text-grey-darker text-sm font-bold mb-2" for="notelp">Nomer Telephone buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="notelp" id="notelp" type="number" placeholder="Your Phone Number">

                <label class="text-grey-darker text-sm font-bold mb-2" for="file">Foto buku</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="file" id="file" type="file" placeholder="Upload Your Photo">

                <input type="submit" value="Simpan Data" class="py-3 px-4 rounded-lg bg-green-400 font-medium ">

            </div>
        </form>
    </div>
</div>
@endsection
