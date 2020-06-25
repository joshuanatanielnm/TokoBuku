@extends('master')

@section('PageTitle', 'cart')

@section('content')
<div class="container mx-auto mt-5">
    <div class="flex">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
            <a href="#">Keranjang Belanja</a>
            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
            </li>
            <li class="flex items-center text-gray-500">
            <a href="#">Pengiriman & Pembayaran</a>
            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
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
                <div class="flex bg-gray-200 p-3 rounded mt-4">
                    <div class="mt-4">
                        <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                    </div>
                    <div class="self-center ml-5">
                        AMD Ryzen 5 3400G
                        <br>
                        Stock: 10
                    <div>
                        <input type="number" class="p-3 font-medium" value=1>
                        <br>
                        Price :  <span class="font-medium text-green-500">Rp 2.599.000</span>
                    </div>
                    <a href="" class="text-red-500">
                        Hapus
                    </a>
                    </div>
                </div>

                <div class="flex bg-gray-200 p-3 rounded mt-4">
                    <div class="mt-4">
                        <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                    </div>
                    <div class="self-center ml-5">
                        AMD Ryzen 5 3400G
                        <br>
                        Stock: 10
                    <div>
                        <input type="number" class="p-3 font-medium" value=1>
                        <br>
                        Price :  <span class="font-medium text-green-500">Rp 2.599.000</span>
                    </div>
                    <a href="" class="text-red-500">
                        Hapus
                    </a>
                    </div>
                </div>

            </div>

            <div class="flex self-center ml-20 bg-gray-200 p-12 rounded">
                <div>
                    <span class="text-xl font-medium">Ringkasan Belanja</span>
                    <br>
                    Total Harga :<span class="font-medium text-green-500">Rp 2.599.000</span>
                    <div class="text-center p-3 bg-orange-500 mt-4 text-xl font-medium rounded cursor-pointer hover:bg-orange-600 hover:text-white">
                        Buy
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="recommned-ram">
            <div class="flex h-20 mt-5">
                <h3 class="self-center text-2xl font-medium margin-auto">Popular Processor</h3>
                <a href="" class="self-center p-2 ml-4 font-medium bg-green-300 rounded-lg hover:bg-green-500 hover:text-white">Lihat Selengkapnya</a>
            </div>
            <div class="grid gap-4 bg-gray-300 rounded-lg lg:grid-cols-5 md:grid-cols-3">
                @for ($i = 0; $i < 5; $i++)
                <div class="p-4 m-4 bg-gray-200 rounded-lg">
                    <div>
                        <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                    </div>
                    <div class="px-3 py-2">
                        <div>
                        <h4>AMD Ryzen 5 3400G</h4>
                        <h4 class="font-medium text-green-500">Rp 2.599.000</h4>
                        <h4>Stock: 10</h4>
                    </div>
                    <div class="p-2 m-2 font-medium text-center bg-orange-500 rounded-lg hover:bg-orange-600 hover:text-white cursor-pointer">
                        Add to cart
                    </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>

</div>
@endsection
