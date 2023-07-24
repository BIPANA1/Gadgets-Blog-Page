<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="container" id="container-nav">
        <div class="nav">
            <ul>

                <span class="logo"><a href="/home" >Gadgets </a></span>
                <li><a href="/product">Products</a></li>
                <li><a href="addProduct">Add Products</a> </li>

                @if(auth()->user())
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a> </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>                
                @endif
               

            </ul>
        </div>
    </div>

@yield('content')



</body>

</html>