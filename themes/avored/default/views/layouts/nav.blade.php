<nav class="navbar navbar-expand-md navbar-light bg-white" style="padding:0;">
    <div class="container">
        {{-- <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://github.com/avored/laravel-ecommerce">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.facebook.com/avored">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://twitter.com/avoredecommerce">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
            </li>
        </ul> --}}
        <ul class="navbar-nav">

            
            
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                
                <div class="container">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                            data-target="#avored-navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="avored-navbar">

                        <ul class="main-navbar navbar-nav mr-auto">
                            @auth()
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">
                                        Welcome {{ Auth::user()->full_name }}</a>
                                </li>
                            @endauth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            @include('layouts.menu-tree',['menus' => $menus])
                            @if($currencies->count() > 1)
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                    
                                    {{ Session::get('currency_code')}}
                                </a>
                                    <div class="dropdown-menu">
                                        @foreach($currencies as $siteCurrencyId => $currencyCode)
                                        <?php
                                        if (strpos(URL::current(), '?')) {
                                            $url = URL::current() . '&currency_code=' . $currencyCode;
                                        } else {
                                            $url = URL::current() . '?currency_code=' . $currencyCode;
                                        }

                                        ?>
                                            <a class="dropdown-item" 
                                                href="{{ $url }}">
                                                {{ $currencyCode}}
                                            </a>
                                        @endforeach
                                    </div>
                               
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            
        </ul>
    </div>
</nav>

<header style="padding: 60px 0;">
    <div class="container text-center">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="w-75" src="{{ asset('vendor/avored-default/images/logo.svg') }}" alt="logo">
        </a>
    </div>
</header>
   

