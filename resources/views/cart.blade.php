@extends('master')

@section('PageTitle', 'cart')

@section('content')
<div class="container mx-auto mt-5">
    <div class="flex">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="#">Keranjang Peminjaman</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </li>
            <li>
                <a href="#" class="text-gray-500" aria-current="page">Selesai</a>
            </li>
        </ol>
    </div>

    <h3 class="mt-5 text-3xl font-medium">My Cart</h3>
    <div>
        <div class="flex">
            <div class="w-4/6">
                @if ($carts->count() > 0)

                @foreach ($carts as $cart)
                <div class="flex bg-gray-200 p-3 rounded mt-4">
                    <div class="mt-4">
                        <img src="{{asset('upload/fotobuku/'.$cart->buku->foto_buku)}}" alt="" class="w-40">
                    </div>
                    <div class="self-center ml-5">
                        <span class="text-2xl font-medium">{{$cart->buku->judul_buku}}</span>
                        <br>
                        {{$cart->buku->pengarang_buku}}
                        <div>
                            <br>
                            <span class="font-medium text-red-400 mb-10">Stok: {{$cart->buku->stok_buku}}</span>
                        </div>
                        <br><br>
                        <a href="/delete/{{$cart->id_cart}}/{{Session::get('id_anggota')}}"
                            class="rounded-full px-4 py-2 mt-5  items-center bg-red-500 text-white font-medium hover:bg-red-600">
                            Hapus
                        </a>
                    </div>
                </div>
                @endforeach

                @else
                <div>
                    <h4 class="text-2xl mt-6 text-gray-500">anda belum menambahkan buku</h4>
                </div>
                @endif

            </div>

            @if ($carts->count() > 0)
            <div class="flex self-start ml-20 bg-gray-200 p-12 rounded mt-4">
                <div>
                    <span class="text-xl font-medium">Ringkasan Pinjaman</span>
                    <br>
                    Dikembalikan : <span
                        class="font-medium text-green-500">{{date('d-m-Y', strtotime('+3 days'))}}</span>
                    <br>
                    Denda : <span class="font-medium text-red-500">Rp.5000/Hari</span>
                    <div
                        class="text-center p-3 bg-orange-500 mt-4 text-xl font-medium rounded cursor-pointer hover:bg-orange-600 hover:text-white">
                        <a href="{{route('sewa', Session::get('id_anggota'))}}">Sewa</a>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </div>



    <div class="recommned-ram">
        <div class="flex h-20 mt-5">
            <h3 class="self-center text-2xl font-medium margin-auto">Popular Book</h3>
            <a href=""
                class="self-center p-2 ml-4 font-medium bg-green-300 rounded-lg hover:bg-green-500 hover:text-white">Lihat
                Selengkapnya</a>
        </div>
        <div class="grid gap-4 bg-gray-300 rounded-lg lg:grid-cols-5 md:grid-cols-3">
            @foreach ($novels as $novel)
            <div class="p-4 m-4 bg-gray-200 rounded-lg">
                <div>
                    <img src="{{asset('upload/fotobuku/'.$novel->foto_buku)}}" alt="" class="w-56 h-64">
                </div>
                <div class="px-3 py-2">
                    <div class="h-24">
                        <h4 class="font-medium">{{$novel->judul_buku}}</h4>
                        <h4 class="text-xs">{{$novel->pengarang_buku}}</h4>
                        <h4 class="font-medium text-red-400">Stock: {{$novel->stok_buku}}</h4>
                    </div>
                    <a href="{{ $novel->id_buku }}/{{Session::get('id_anggota')}}">
                        <div
                            class="p-2 m-2 font-medium text-center bg-orange-500 rounded-lg hover:bg-orange-600 hover:text-white cursor-pointer">
                            Sewa
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</div>

</div>
@endsection
