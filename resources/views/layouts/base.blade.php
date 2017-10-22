<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
@yield('header')

@yield('content')

@yield('footer')

@yield('footer_copyrights')

</body>

</html>
