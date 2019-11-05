<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
</head>

<body>
    <div class="main-container">
        @include('inc.nav')
        @yield('content')
        <footer class="container">
            <p>Acme Web Design, Copyright &copy; 2017</p>
        </footer>
    </div>
</body>

</html>
