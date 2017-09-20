<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="Scotch">

        <title>Photography</title>

        <!-- load bootstrap from a cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

        </style>

        <script type="text/javascript">
            function callRoute() {
                window.location = '{{ url('/gallery' )}}';
            }
        </script>
    </head>
    <body>
    <span class="flex-center">
                <button onclick="callRoute()" class="btn button">Gallery</button>
            </span>
 {{--   <button>{{ route('gallery') }}">Click</button>--}}
            <div class="content flex-center full-height">
                <div class="title">
                    Roxana <br>
                    photography
                </div>
            </div>
            <div>© Copyright 2017 Roxana Mihaela Gainaru</div>
    </body>
</html>
