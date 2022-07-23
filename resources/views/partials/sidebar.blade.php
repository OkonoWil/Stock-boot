<nav>
    <ul>
        @if ($request->is('/'))
        <li class=" m-3 font-bold text-indigo-800"><a href="/">Home</a></li>
        @else
        <li class=" m-3 font-bold"><a href="/">Home</a></li>
        @endif
        @if ($request->is("products/*")||$request->is("products"))
        <li class=" m-3 font-bold text-indigo-800"><a href="{{route('products.index')}}">Products</a></li>
        @else
        <li class=" m-3 font-bold"><a href="{{route('products.index')}}">Products</a></li>
        @endif
        @if ($request->is('contact/*'))
        <li class=" m-3 font-bold text-indigo-800"><a href="#">Contact</a></li>
        @else
        <li class=" m-3 font-bold"><a href="#">Contact</a></li>
        @endif
        @auth
            <li class=" m-3 font-bold"><a href="{{route('auth.logout')}}">Logout</a></li>
        @else
            <li class=" m-3 font-bold"><a href="{{route('getlogin')}}">Login</a></li>
        @endauth
    </ul>
</nav>