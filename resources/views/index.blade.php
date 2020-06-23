<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
    <title>@yield('PageTitle')</title>
</head>
<body>
    <div class="contai mx-auto bg-blue-300">
        <div class="flex container mx-auto text-xs">
            Buka pukul 08:00 - 22:00
        </div>
    </div>
    <header class="container flex-wrap items-center p-6 mx-auto  h-200">
        <div class="flex justify-between ">
            <div>
                <img src="{{ asset('logo/logo.png') }}" alt="" class="w-48">
            </div>

            <div class="flex items-center">
                <div class="px-3">
                    <a href="" class="flex hover:font-medium"><img src="{{ asset('Icons/buy.svg') }}" alt="" class="w-10 px-2"> Cart</a>
                </div>
                <div class="px-3">
                    <a href="" class="flex hover:font-medium"><img src="{{ asset('Icons/user.svg') }}" alt="" class="w-10 px-2"> Login/Register</a>
                </div>
            </div>
        </div>
    </header>

    <div style="">
        <div class="flex justify-center ">
            <img src="{{ asset('Image/banner.png') }}" alt="" class="">
        </div>
    </div>

    <div class="konten">
        <div class="container mx-auto">
            <div class="recommned-ram">
                <h3 class="mt-5 font-medium text-xl">Popular Processor</h3>
                <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-4">
                    <div class="bg-gray-200 p-4 m-4 rounded-lg">
                        <div>
                            <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                        </div>
                        <div class="px-3 py-2">
                            <div>
                            <h4>AMD Ryzen 5 3400G</h4>
                            <h4 class="font-medium text-green-500">Rp 2.599.000</h4>
                            <h4>Stock: 10</h4>
                        </div>
                        <div class="p-2 m-2 bg-orange-500 text-center rounded-lg font-medium hover:bg-orange-600 hover:text-white">
                            Add to cart
                        </div>
                        </div>
                    </div>

                    <div class="bg-gray-200 p-4 m-4 rounded-lg">
                        <div>
                            <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                        </div>
                        <div class="px-3 py-2">
                            <div>
                            <h4>AMD Ryzen 5 3400G</h4>
                            <h4 class="font-medium text-green-500">Rp 2.599.000</h4>
                            <h4>Stock: 10</h4>
                        </div>
                        <div class="p-2 m-2 bg-orange-500 text-center rounded-lg font-medium hover:bg-orange-600 hover:text-white">
                            Add to cart
                        </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 p-4 m-4 rounded-lg">
                        <div>
                            <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                        </div>
                        <div class="px-3 py-2">
                            <div>
                            <h4>AMD Ryzen 5 3400G</h4>
                            <h4 class="font-medium text-green-500">Rp 2.599.000</h4>
                            <h4>Stock: 10</h4>
                        </div>
                        <div class="p-2 m-2 bg-orange-500 text-center rounded-lg font-medium hover:bg-orange-600 hover:text-white">
                            Add to cart
                        </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 p-4 m-4 rounded-lg">
                        <div>
                            <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                        </div>
                        <div class="px-3 py-2">
                            <div>
                            <h4>AMD Ryzen 5 3400G</h4>
                            <h4 class="font-medium text-green-500">Rp 2.599.000</h4>
                            <h4>Stock: 10</h4>
                        </div>
                        <div class="p-2 m-2 bg-orange-500 text-center rounded-lg font-medium hover:bg-orange-600 hover:text-white">
                            Add to cart
                        </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 p-4 m-4 rounded-lg">
                        <div>
                            <img src="{{ asset('upload/productImg/ryzen.png') }}" alt="" class="w-56">
                        </div>
                        <div class="px-3 py-2">
                            <div>
                            <h4>AMD Ryzen 5 3400G</h4>
                            <h4 class="font-medium text-green-500">Rp 2.599.000</h4>
                            <h4>Stock: 10</h4>
                        </div>
                        <div class="p-2 m-2 bg-orange-500 text-center rounded-lg font-medium hover:bg-orange-600 hover:text-white">
                            Add to cart
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
</html>
