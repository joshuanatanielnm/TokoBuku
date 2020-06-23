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
    <header class="container flex-wrap items-center p-6 mx-auto  h-200">
        <div class="flex justify-between ">
            <div>
                <img src="{{ asset('logo/logo.png') }}" alt="" class="w-4/6">
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


</body>
</html>
