<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
    <div class="bg-gray-100 font-sans w-full m-0">
        @include('_layouts.header')
        <div style="min-height: calc(100vh - 300px)">
            @yield('body')
        </div>
        @include('_layouts.footer')
    </div>
    </body>
</html>
