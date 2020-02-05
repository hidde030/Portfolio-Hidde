
 <div class='fullscreenDiv'>
    <div class="center work">
    @if(\Request::is('mijn-werk') || \Request::is('mijn-werk/*'))
        <a href="/mijn-werk" class="active">work</a>
    @else
        <a href="/mijn-werk">work</a>
    @endif
    </div>
    <div class="center blog">
    @if (\Request::is('blog') || \Request::is('blog/*'))
        <a href="/blog" class="active">Blog</a>
    @else
    <a href="/blog">Blog</a>
    @endif
    </div>
    <div class="center contact">
    @if (\Request::is('contact'))
        <a href="/contact" class="active">contact</a>
    @else
    <a href="/contact">contact</a>
    @endif
    </div>
    <!-- <div class="center idk">
    @if(\Request::is('/'))
        <a href="/" class="active">idk</a>
    @else
    <a href="/">idk</a>
    @endif
    </div> -->
  </div>
