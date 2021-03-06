@extends('form')

@section('PageTitle', 'Form Login')

@section('form')


<div class="login">
    <h3 class="text-center text-xl font-medium">Login</h3>
    <div class="flex justify-center">
        <form action="/loginAdmin" method="post" class="flex justify-center" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div>

                <label class="text-grey-darker text-sm font-bold mb-2" for="username">Username Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="username" id="username" type="text" placeholder="Username . . . ">

                <label class="text-grey-darker text-sm font-bold mb-2" for="password">Password Admin</label>
                <input class="mb-3 appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="password" id="password" type="password" placeholder="Password . . . ">

                <div class="flex justify-between">
                    <input type="submit" value="Login" class="py-2 px-4 rounded-lg bg-green-400 font-medium cursor-pointer hover:bg-green-600 hover:text-white">

                    <div class="font-medium text-blue-700">
                        <a href="/">Kembali ke halaman utama</a>
                    </div>
                </div>




            </div>
        </form>
    </div>
</div>
@endsection
