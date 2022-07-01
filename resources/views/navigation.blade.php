<nav>
    <div class="sidebar">
        <a class="{{ Request::path() === '/' ? 'active' : ''}}" href="/">Home</a>
        <a class="{{ Request::path() === 'profile' ? 'active' : ''}}" href="/profile">Mijn profiel</a>
        <a class="{{ Request::path() === 'blog' ? 'active' : ''}}" href="/blog">Blog</a>
        <a class="{{ Request::path() === 'dashboard' ? 'active' : ''}}" href="/dashboard">Dashboard</a>
        <a class="{{ Request::path() === 'faq' ? 'active' : ''}}" href="/faq">FAQ</a>
        <a class="{{ Request::path() === 'school' ? 'active' : ''}}" href="/school">School</a>
        @if(Auth::check())
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        @elseif(!Auth::check())
            <a class="{{ Request::path() === 'login' ? 'active' : ''}}" href="/login">Login</a>
        @endif
    </div>
</nav>
