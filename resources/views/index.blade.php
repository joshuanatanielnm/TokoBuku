@extends('master')

@section('PageTitle', 'index')

@section('banner')
<div style="">
    <div class="flex justify-center ">
        <img src="{{ asset('Image/banner.png') }}" alt="" class="">
    </div>
</div>
@endsection

@section('content')

<div class="konten">
    <div class="container mx-auto">
        @for ($x = 0; $x < 3; $x++)
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
        @endfor
    </div>
</div>

@endsection
