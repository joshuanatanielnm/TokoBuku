@extends('master')

@section('PageTitle', 'index')

@section('banner')
<div style="">
    <div class="flex justify-center ">
        <img src="{{ asset('Image/Banner-Slider-Gerai-GDN-Children-Maret-2019.jpg') }}" alt="" class="">
    </div>
</div>
@endsection

@section('content')

<div class="konten">
    <div class="container mx-auto">

        <!-- NOVEL -->
        <div class="novel">
            <div class="flex h-20 mt-5">
                <h3 class="self-center text-2xl font-medium margin-auto">Popular Novel</h3>
                <a href="" class="self-center p-2 ml-4 font-medium bg-green-300 rounded-lg hover:bg-green-500 hover:text-white">Lihat Selengkapnya</a>
            </div>
            <div class="grid gap-4 bg-gray-300 rounded-lg lg:grid-cols-5 md:grid-cols-3">


             @foreach ($novels as $novel)
                <div class="p-4 m-4 bg-gray-200 rounded-lg">
                    <div>
                        <img src="{{asset('upload/fotobuku/'.$novel->foto_buku)}}" alt=""  class="w-56 h-64">
                    </div>
                    <div class="px-3 py-2">
                        <div class="h-24">
                            <h4 class="font-medium">tes {{Session::get('id_anggota')}}</h4>
                            <h4 class="font-medium">{{$novel->judul_buku}}</h4>
                            <h4 class="text-xs">{{$novel->pengarang_buku}}</h4>
                            <h4 class="font-medium text-red-400">Stock: {{$novel->stok_buku}}</h4>
                        </div>
                        <a href="cart/{{ $novel->id_buku }}/{{Session::get('id_anggota')}}">
                            <div class="p-2 m-2 font-medium text-center bg-orange-500 rounded-lg hover:bg-orange-600 hover:text-white cursor-pointer">
                                Sewa
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        <!-- END NOVEL -->


        <!-- PENGETAHUAN -->
        <div class="pengetahuan">
            <div class="flex h-20 mt-5">
                <h3 class="self-center text-2xl font-medium margin-auto">Popular Novel</h3>
                <a href="" class="self-center p-2 ml-4 font-medium bg-green-300 rounded-lg hover:bg-green-500 hover:text-white">Lihat Selengkapnya</a>
            </div>
            <div class="grid gap-4 bg-gray-300 rounded-lg lg:grid-cols-5 md:grid-cols-3">


             @foreach ($pengetahuans as $pengetahuan)
                <div class="p-4 m-4 bg-gray-200 rounded-lg">
                    <div>
                        <img src="{{asset('upload/fotobuku/'.$pengetahuan->foto_buku)}}" alt="" class="w-56 h-64">
                    </div>
                    <div class="px-3 py-2">
                        <div class="h-24">
                            <h4 class="font-medium">{{$pengetahuan->judul_buku}}</h4>
                            <h4 class="text-xs">{{$pengetahuan->pengarang_buku}}</h4>
                            <h4 class="font-medium text-red-400">Stock: {{$pengetahuan->stok_buku}}</h4>
                        </div>
                        <a href="cart/{{ $pengetahuan->id_buku }}/{{Session::get('id_anggota')}}">
                            <div class="p-2 m-2 font-medium text-center bg-orange-500 rounded-lg hover:bg-orange-600 hover:text-white cursor-pointer">
                                Sewa
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        <!-- END PENGETAHUAN -->


        <!-- KOMIK -->
        <div class="pengetahuan">
            <div class="flex h-20 mt-5">
                <h3 class="self-center text-2xl font-medium margin-auto">Popular Novel</h3>
                <a href="" class="self-center p-2 ml-4 font-medium bg-green-300 rounded-lg hover:bg-green-500 hover:text-white">Lihat Selengkapnya</a>
            </div>
            <div class="grid gap-4 bg-gray-300 rounded-lg lg:grid-cols-5 md:grid-cols-3">


             @foreach ($komiks as $komik)
                <div class="p-4 m-4 bg-gray-200 rounded-lg">
                    <div>
                        <img src="{{asset('upload/fotobuku/'.$komik->foto_buku)}}" alt="" class="w-56 h-64">
                    </div>
                    <div class="px-3 py-2">
                        <div class="h-24">
                            <h4 class="font-medium">{{$komik->judul_buku}}</h4>
                            <h4 class="text-xs">{{$komik->pengarang_buku}}</h4>
                            <h4 class="font-medium text-red-400">Stock: {{$komik->stok_buku}}</h4>
                        </div>
                        <a href="cart/{{ $komik->id_buku }}/{{Session::get('id_anggota')}}">
                            <div class="p-2 m-2 font-medium text-center bg-orange-500 rounded-lg hover:bg-orange-600 hover:text-white cursor-pointer">
                                Sewa
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        <!-- END KOMIK -->



    </div>
</div>



@endsection
