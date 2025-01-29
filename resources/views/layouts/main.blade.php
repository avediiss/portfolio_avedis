<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avedis</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap" rel="stylesheet">



    @vite(['resources/scss/app.scss', 'resources/js/app.js'])





    @livewireStyles


</head>
<body>


    @include('partials.header')

<main>
        @yield('content')
</main>

    @include('partials.footer')



    @livewireScripts


</body>
</html>
