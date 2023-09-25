<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Logo --}}
    <link rel="icon" type="image/x-icon" href="./media/logo_noscritta.png">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <title>CapeTrip</title>

    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    
    <x-navbar/>

    {{$slot}}

    @livewireScripts
    @vite('resources/js/app.js')
    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/0f3153532c.js" crossorigin="anonymous"></script>
    {{-- Swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>