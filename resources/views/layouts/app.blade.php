<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Boot - @yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="conatiner flex flex-grow">
    <div class="h-screen bg-indigo-700 flex justify-center text-white text-xl w-1/5 p-6">
        @include('partials.sidebar')
    </div>
    <div class="h-screen flex-grow container p-3">
        @yield('content')
    </div>
  </div>
  </h1>
</body>
</html>