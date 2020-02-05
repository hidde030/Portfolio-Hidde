<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title><?php echo env('APP_NAME') ?> - @yield('title') </title>
  <link rel="stylesheet" href="<?=asset('/css/header.css');?>">
  <link rel="stylesheet" href="<?=asset('/css/work.css');?>">
  <!-- libraries card -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  @yield('styles')
</head>

<body>
{{--@yield('header', View::make('layouts.header'))--}}
    @yield('menu', View::make('layouts.menu'))
  @yield('content')
  <script src="{{asset('js/jquery.js')}}"></script>
  <script>
    $(window).on('load', function() {
      $('.post-module').hover(function() {
        $(this).find('.description').stop().animate({
          height: "toggle",
          opacity: "toggle"
        }, 300);
      });
    });
  </script>
</body>

</html>