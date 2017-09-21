<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="Scotch">
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
            <a href='welcome' class="logo-container" style="text-decoration: none">
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
                </ul>
            </nav>
        </header>
        <nav style="overflow: hidden; outline: none;" tabindex="0">
            <ul>
                <li></li>
            </ul>
        </nav>
        <footer>© Copyright 2017 Roxana Mihaela</footer>
    </body>
</html>