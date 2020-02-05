<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo env('APP_NAME') ?> - @yield('title') </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300'>


    <link rel="stylesheet" href="<?=asset('/css/home.css');?>">
    <link rel="stylesheet" href="<?=asset('/css/loader.css');?>">
</head>
<body>

<div class="container">
{{--@yield('header', View::make('layouts.header'))--}}
    @yield('menu', View::make('layouts.menuhomepage'))
    @yield('content')
</div>

  <!-- added preloader added  -->
 <script src="{{asset('js/jquery.js')}}"></script>
 <script>
 let $wrap = $('.wrapper'), $lEye = $('.eye'), lFollowX = 5, lFollowY = 10, x = 0, y = 0, friction = 1 / 12;

function animate() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;

  $lEye.css({
    '-webit-transform': `translate(${-x}px, ${-y}px)`,
    '-moz-transform': `translate(${-x}px, ${-y}px)`,
    'transform': `translate(${-x}px, ${-y}px)`
  });

  $wrap.css({
    'transform': `translate(-50%, -50%) perspective(600px) rotateY(${-x}deg) rotateX(${y}deg)`
  });
  window.requestAnimationFrame(animate);
}

$(window).on('mousemove click', e => {

  const lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  const lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (12 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

animate();</script>
<script>
$(window).on('load', function () {
      setTimeout(function () {

        $('#fade').removeAttr('id');
        $('.preloader').removeClass('loading');
        $("#fade").fadeOut('id');
        $(".preloader").fadeOut('loading');
      }, 800);
    });</script>

</body>
</html>
