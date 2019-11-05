<nav class="container">
    <h1><span class="logo">Acme</span> Web Design</h1>
    <div class="hide-sm">
        <ul>            
            <li class="{{ Request::path() == '/' ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{ Request::path() == 'about' ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{ Request::path() == 'service' ? 'active' : ''}}"><a href="/service">Services</a></li>
        </ul>
    </div>
</nav>