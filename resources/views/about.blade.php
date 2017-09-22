<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Photo">
        <meta name="Alex" content="Scotch">
        <title>Portfolio</title>

        <!-- Style sheet -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

        <!-- load bootstrap from a cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <a href='welcome' class="logo-container">
                <p>ROXANA PHOTOGRAPHY</p></a>
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
        <content class="flex-center full-height position-ref">
            <p> This is a page about the kindest and sweetest person I have met. <br>
            Her name is Roxana.<br>
            This website is a tribute to her.
            </p>
        </content>
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