<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
     <div class="container-fluid ">

        <div class="container w-75 ">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            @yield("backContent")
        </x-app-layout>
        @include("back.partials.nav")
        </div>
    </div>
        @include("back.partials.footer")
   <script src="{{asset('js/app.js')}}"></script>
   <script src="{{asset('js/tailwind.js')}}"></script>
</body>
</html>