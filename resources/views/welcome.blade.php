<!DOCTYPE HTML>

    <head>


        <meta charset="utf-8">
        <title>Photography</title>

        <!-- Meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Photo">
        <meta name="Alex" content="Scotch">


        <!-- Style sheet -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('js/flexslider/style.css') }}">

        <!-- load bootstrap from a cdn -->
       {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">--}}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="/js/jquery-3.2.1.js" type="text/javascript"></script>
        {{--<script src="/js/queryloader2.min.js" type="text/javascript"></script>--}}
        <script src="/js/flexslider/jquery.flexslider-min.js" type ="text/javascript"></script>
        <script src="/js/lazyload.min.js" type="text/javascript"></script>
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
--}}

    </head>


<body>

{{--    <!-- Begin Loader -->
    <div class="loader" data-background-color="#ffffff" data-text-color="#000000">
        <p>LOADING</p>
        <span class="circle"></span>
    </div>
    <!-- End Loader -->--}}

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

        <div class="main-container with-padding">

            <div class="wrapper">

                <div class="gallery-h centered">
                    <div class="nav">
                        <a href="#" class="prev icon4-leftarrow23"></a>
                        <a href="#" class="next icon4-chevrons"></a>
                    </div>

                    <div class="gallery clearfix">

                        <div class="container">
                            <div class="img">
                                <a href="/public/pictures/pic1.jpg" rel="gallery">
                                    <img class="lazy" data-original="/public/pictures/pic1.jpg" alt="pic1" -width="400" data-height="500">
                                </a>
                            </div>

                            <div class="img">
                                <a href="/public/pictures/pic2.jpg" rel="gallery">
                                    <img class="lazy" data-original="/public/pictures/pic2.jpg" alt="pic2" data-width="600" data-height="800">
                                </a>
                            </div>

                            <div class="img active">
                                <a href="/public/pictures/pic3.jpg" rel="gallery">
                                    <img class="lazy" data-original="/public/pictures/pic3.jpg" alt="pic3" data-width="1365" data-height="2048">
                                </a>
                            </div>

                            <div class="img">
                                <a href="/public/pictures/pic4.jpg" rel="gallery">
                                    <img class="lazy" data-original="public/pictures/pic4.jpg" alt="pic4" data-width="1365" data-height="2048">
                                </a>
                            </div>

                            <div class="img">
                                <a href="/public/pictures/pic5.jpg" rel="gallery">
                                    <img class="lazy" data-original="public/pictures/pic5.jpg" alt="pic5" data-width="1365" data-height="2048">
                                </a>
                            </div>

                            <div class="img">
                                <a href="/public/pictures/pic6.jpg" rel="gallery">
                                    <img class="lazy" data-original="/public/pictures/pic6.jpg" alt="pic6" data-width="2048" data-height="1581">
                                </a>
                            </div>

                            <div class="img">
                                <a href="/public/pictures/pic7.jpg" rel="gallery">
                                    <img class="lazy" data-original="/public/pictures/pic7.jpg" alt="pic7" data-width="1920" data-height="1280">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

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
    </body>
</html>
