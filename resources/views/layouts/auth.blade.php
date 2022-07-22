<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('icons8_online_store.ico')}}" type="image/x-icon">
    <title>{{env('APP_NAME')}} - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container flex justify-center items-center h-full w-full">
        @yield('content')
    </div>
</body>
</html>