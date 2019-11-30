<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css">
    <!-- Styles -->
</head>


<body class="font-sans text-xl">
    @include('layouts.flash-msg')
    <nav class="container mx-auto">
        <div class="flex justify-between items-center">
            <img src="https://via.placeholder.com/150x60" alt="">
            <ul class="flex">
                <li class="mr-4 uppercase"><a href="/">Shop</a></li>
                <li class="mr-4 uppercase"><a href="/cart">Carts
                        <span class="p-2 bg-blue-700 text-white rounded">
                            @if(session()->has('cart'))
                            {{session()->get('cart')->totalQty}}
                            @else
                            0
                            @endif
                        </span>
                    </a>
                </li>
                <li class="mr-4 uppercase"><a href="/orders">Orders</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <script src="/js/script.js"></script>
</body>

</html>
