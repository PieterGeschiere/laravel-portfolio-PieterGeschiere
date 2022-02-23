<nav>
    <div class="sidebar">
        <a class="{{ Request::path() === '/' ? 'active' : ''}}" href="/">Home</a>
        <a class="{{ Request::path() === 'profile' ? 'active' : ''}}" href="/profile">Mijn profiel</a>
        <a class="{{ Request::path() === 'blog' ? 'active' : ''}}" href="/blog">Blog</a>
        <a class="{{ Request::path() === 'dashboard' ? 'active' : ''}}" href="/dashboard">Dashboard</a>
        <a class="{{ Request::path() === 'faq' ? 'active' : ''}}" href="/faq">FAQ</a>
        <a class="{{ Request::path() === 'school' ? 'active' : ''}}" href="/school">School</a>
    </div>
</nav>
