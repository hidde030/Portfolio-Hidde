

<header>
      <h1>HIDDE</h1>
        <nav>
        @if(\Request::is('/'))
            <a href="/" class="active">Home</a>
        @else
        <a href="/">Home</a>
        @endif
        @if(\Request::is('mijn-werk') || \Request::is('mijn-werk/*'))
            <a href="/mijn-werk" class="active">Work</a>
        @else
          <a href="/mijn-werk">Work</a>
        @endif
        @if (\Request::is('blog') || \Request::is('blog/*'))
            <a href="/blog" class="active">Blog</a>
        @else
            <a href="/blog">Blog</a>
        @endif
        @if (\Request::is('contact'))
          <a href="/contact" class="active">Contact</a>
        @else
            <a href="/contact">Contact</a>
        @endif
        </nav>
</header>
