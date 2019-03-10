
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>BulkPaperStraw | UK Based, enviromentaly safe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="{{url('/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/prettyPhoto/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    <script src="{{ asset('/vendor/avored-default/js/app.js') }}"></script>
    @include("layouts.nav")

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session()->has('errorNotificationText'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <strong>Error!</strong> {{ session()->get('errorNotificationText') }}
                </div>
                @endif

                @if(session()->has('notificationText'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <strong>Success!</strong> {{ session()->get('notificationText') }}
                </div>
                @endif
            </div>
        </div> 
        @yield('content')
    </div>

    @include('layouts.footer')
    <!-- Javascript -->
    <script src="assets/js/jquery-1.8.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/jquery.tweet.js"></script>
    <script src="assets/js/jflickrfeed.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/jquery.ui.map.min.js"></script>
    <script src="assets/js/jquery.quicksand.js"></script>
    <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/scripts.js"></script>
    @stack('scripts')
</body>
</html>
