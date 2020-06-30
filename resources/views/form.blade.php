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
    <img src="{{ asset('Image/background.jpg') }}" alt="" class="absolute object-cover" style="z-index: -1">
    <div class="flex content-center flex-wrap h-screen justify-center">
        <div class="w-2/5">

            @if(\Session::has('alert'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">{{Session::get('alert')}}</strong>
            </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif


            <div class="bg-blue-100 p-8 rounded-lg shadow-lg">
                @yield('form')
            </div>
        </div>
    </div>
</body>
</html>
