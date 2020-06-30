@extends('form')

@section('PageTitle', 'Form Signup')

@section('form')
<div class="Signup">
    <h3 class="text-center text-xl font-medium">Signup</h3>
    <div class="flex justify-center">
        <form action="/signup" method="post" class="flex justify-center" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div>

                <label class="text-grey-darker text-sm font-bold mb-2" for="username">Username Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="username" id="username" type="text" placeholder="Your Phone Number">

                <label class="text-grey-darker text-sm font-bold mb-2" for="password">Password Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="password" id="password" type="password" placeholder="Your Phone Number">

                <label class="text-grey-darker text-sm font-bold mb-2" for="nama">Nama Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="nama" id="nama" type="text" placeholder="Your name">

                <label class="text-grey-darker text-sm font-bold mb-2" for="alamat">Alamat Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="alamat" id="alamat" type="text" placeholder="Your addres">

                <label class="text-grey-darker text-sm font-bold mb-2" for="notelp">Nomer Telephone Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="notelp" id="notelp" type="number" placeholder="Your Phone Number">

                <label class="text-grey-darker text-sm font-bold mb-2" for="file">Foto Admin Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="file" id="file" type="file" placeholder="Upload Your Photo">


                <input type="submit" value="Signup" class="py-2 px-4 rounded-lg bg-green-400 font-medium cursor-pointer hover:bg-green-600 hover:text-white">

            </div>
        </form>
    </div>
</div>
@endsection
