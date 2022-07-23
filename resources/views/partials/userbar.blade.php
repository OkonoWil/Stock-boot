
<div class="hidden fixed top-0 right-0 px-6 sm:block">
    @auth
        <a href="{{url('/')}}" class="text-sm text-gray-700 dark:bg-gray-500 underline">Welcome, {{Auth::user()->name}}<i class="fa-solid fa-user ml-2"></i></a>
    @else
        <a href="{{route('getlogin')}}" class="text-sm text-gray-700 dark:bg-gray-500 underline">Log in</a>
        @if(Route::has('getregister'))
            <a href="{{route('getregister')}}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"></a>
        @endif
    @endauth
</div>