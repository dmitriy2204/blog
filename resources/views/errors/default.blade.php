<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .show_error {
                width: 300px;
                background-color: #e1e5ec;
                padding: 25px 27px;
                margin: 15% auto;
                border-radius: 4px;
            }


            .number, .text {
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background: #E2EBDA;
                padding: 10px 15px;
                box-shadow: -3px 4px 5px;
            }
        </style>
    </head>
    <body>
        <div class="show_error">
            <div class="number">
                @yield('number', 'Error`s number')
            </div>
            <div class="text">
                @yield('text', 'Error`s text')
            </div>
        </div>
    </body>
</html>
