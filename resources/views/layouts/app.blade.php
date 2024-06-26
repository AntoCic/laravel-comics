<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'COMICS')</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials/header')
    @include('partials/jumbo')
    <main>
        @yield('content')
    </main>
    @include('partials/footer')
    @dump($comics)
</body>

</html>