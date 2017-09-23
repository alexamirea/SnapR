<!DOCTYPE HTML>
<html>
    <head>


        <meta charset="utf-8">
        <title>Gallery</title>

        <!-- Meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Photo">
        <meta name="Alex" content="Scotch">


        <!-- Style sheet -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('js/flexslider/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/js/jquery-ui/jquery-ui.1.10.3.custom.min.css') }}">

        <!-- load bootstrap from a cdn -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">--}}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>

    <body>
    <header>
        <a href='welcome' class="logo-container">
            <p>ROXANA PHOTOGRAPHY</p>
        </a>

        <nav>
            <ul>
                <li>
                    <a href='welcome'>HOME</a>
                </li>
                <li>
                    <a href='gallery'>GALLERY</a>
                </li>
                <li>
                    <a href='portfolio'>PORTFOLIO</a>
                </li>
                <li>
                    <a href='about'>ABOUT</a>
                </li>
            </ul>
        </nav>

    </header>

    <footer>
        <p class="copyrights">© ROXANA PHOTOGRAPHY | ALL RIGHTS RESERVED</p>
        <div class="social-networks clearfix">
            <a href="https://www.facebook.com/Rrrroxana17">
                <span>FACEBOOK</span>
                <i class="facebook-icon icon1-facebook"></i>
            </a>
            <a href="#">
                <span>TWITTER</span>
                <i class="twitter-icon icon1-twitter"></i>
            </a>
            <a href="#">
                <span>PINTEREST</span>
                <i class="pinterest-icon icon3-pinterest"></i>
            </a>
            <a href="https://www.instagram.com/rrrroxana17">
                <span>INSTAGRAM</span>
                <i class="instagram-icon icon3-instagram"></i>
            </a>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="/js/jquery-3.2.1.js" type="text/javascript"></script>
    {{--<script src="/js/queryloader2.min.js" type="text/javascript"></script>--}}
    <script src="/js/flexslider/jquery.flexslider-min.js" type ="text/javascript"></script>
    <script src="/js/lazyload.min.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
    <script src="/js/jquery-ui/jquery-ui.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
--}}
    </body>
</html>