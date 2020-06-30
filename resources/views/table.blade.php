<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
    <title>@yield('TableTitle')</title>
</head>
<body>
    <style>
        .page-container {
        position: relative;
        min-height: 100vh;
        }

        .content-wrap {
        padding-bottom: 2.5rem;    /* Footer height */
        }

        .footer {
        position: absolute;
        width: 100%;
        height: 2.5rem;            /* Footer height */
        }
    </style>
    <div class="page-container">
        <div class="content-wrap">
            <header class="container flex-wrap items-center p-6 mx-auto rounded-b-lg h-200">
                <div class="flex justify-between ">
                    <div>
                        <a href="{{ url('/') }}"><img src="{{ asset('logo/logo.png') }}" alt="" class="w-48"></a>
                    </div>
                    <div class="flex items-center">
                        <div class="px-3">
                            <a href="/logout" class="flex font-medium hover:font-bold py-2 px-3 bg-red-500 text-white rounded-lg">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <nav class="flex justify-center">
                <div>
                    <div class="flex items-center">
                        <div class="px-3">
                            <a href="{{ url('/admin') }}" class="flex font-medium hover:font-bold">Table Admin</a>
                        </div>
                        <div class="px-3">
                            <a href="{{ url('/anggota') }}" class="flex font-medium hover:font-bold">Table Anggota</a>
                        </div>
                        <div class="px-3">
                            <a href="{{ url('/buku') }}" class="flex font-medium hover:font-bold">Table Buku</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div>
                @yield('content')
            </div>
        </div>

        <div class="footer ">
            <div class="flex align-center justify-center bg-black text-white font-medium h-10">
                This is Footer
            </div>
        </div>
    </div>

</body>
</html>
