<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('icons8_online_store.ico')}}" type="image/x-icon">
  <title>{{env('APP_NAME')}} - @yield('title')</title>
  <link rel="stylesheet" href="{{asset('FontAwesone/css/all.css')}}">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="conatiner flex flex-row">
    <div class=" h-screen bg-indigo-400 flex justify-center text-white text-xl w-1/5 p-6">
        @include('partials.sidebar')
    </div>
    <div class="h-screen flex-col container p-3">
        <div>
          @include('partials.userbar')
        </div>
        @yield('content')
    </div>
  </div>
  </h1>
</body>
</html>