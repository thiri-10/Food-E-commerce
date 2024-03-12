<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    {{-- <link href="../../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}



    <style>
        .sticky-cart {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navigation -->
    @include('layouts.nav')
    

    @yield('content')

    
    <!-- Sticky Cart -->
    <div class="sticky-cart">
        <a href="{{route('cart')}}"
            class="flex justify-center items-center bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            
            
              <div class="text-2xl"> <i class="fas fa-shopping-cart"></i></div>
               
            
        </a>
    </div>

    @include('layouts.footer')

    

    
</body>

</html>
