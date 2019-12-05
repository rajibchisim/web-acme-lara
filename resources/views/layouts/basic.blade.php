<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <link rel="stylesheet" href="{{ secure_asset('/css/style.css') }}" type="text/css">
</head>

<body>
    <div class="modal-menu" id="modal-menu-container">
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/service">SERVICE</a></li>
        </ul>
    </div>
    <div class="main-container">
        @include('inc.nav')
        @yield('content')
        <footer class="container">
            <p style="font-style: italic">Dev-demo by rajibchisim@gmail.com</p>
        </footer>
    </div>
    <script>
        var menuContainer = document.querySelector('#modal-menu-container');
        var buttonMenu = document.querySelector('#button-menu');
        menuContainer.classList.add('modal-menu-hide');

        menuContainer.addEventListener('click', ()=>{
            menuContainer.classList.add('modal-menu-hide');
        });
        buttonMenu.addEventListener('click', ()=>{
            console.log('button clicked!');
            menuContainer.classList.remove('modal-menu-hide');
        })
    </script>
</body>

</html>
