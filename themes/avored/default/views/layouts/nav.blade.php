<!-- Header -->
<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1>
                        <a class="brand" href="index.html">Andia - a super cool design agency...</a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            @auth()
                                <li>
                                    <a class="nav-link" href="{{ route('home') }}">
                                        Welcome {{ Auth::user()->full_name }}</a>
                                </li>
                            @endauth
                            <li class="current-page">
                                <a href="{{url('/')}}"><i class="icon-home"></i><br />Home</a>
                            </li>
                            <li>
                                <a href="{{url('/products')}}"><i class="icon-camera"></i><br />Products</a>
                            </li>
                            <li>
                                <a href="{{url('/trade')}}"><i class="icon-tasks"></i><br />Trade</a>
                            </li>
                            <li>
                                <a href="{{url('my-account')}}"><i class="icon-user"></i><br />My account</a>
                            </li>
                            <li>
                                <a href="{{url('/contact')}}"><i class="icon-envelope-alt"></i><br />Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





{{-- <header style="padding: 60px 0;">
    <div class="container text-center">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="w-75" src="{{ asset('vendor/avored-default/images/logo.svg') }}" alt="logo">
        </a>
    </div>
</header>
    --}}

