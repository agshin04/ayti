<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'Ayti')</title>
</head>
<body>

@include('components.partials.navbar')

{{--  Page content  --}}
<main>
    @yield('content')
</main>

@include('components.partials.footer')

</body>
</html>
