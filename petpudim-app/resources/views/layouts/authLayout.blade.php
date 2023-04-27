<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Pet Pudim</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-auto" style="background-image: url('{{ asset('background/background.png')}}'); 
                             background-repeat: no-repeat; fixed;
                             overflow-x: hidden; width:100%; height:auto; center">
    <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4 justify-center">
        @yield('content')
    </div>
</body>