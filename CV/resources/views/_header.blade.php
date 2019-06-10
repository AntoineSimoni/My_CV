<nav class="header">
    @guest
        <ul>
            <li><a href="/register">register</a></li>
            <li><a href="/login">login</a></li>
        </ul>
    @else
        <ul>
            <li>Bonjour <b>{{ Auth::user()->name }}</b></li>
            <li><a href="/logout">logout</a></li>
        </ul>
    @endguest
</nav>