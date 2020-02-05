<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo env('APP_NAME') ?> - @yield('title') </title>
    <link rel="stylesheet" href="<?= asset('/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= asset('/css/app.css'); ?>">
    <link rel="stylesheet" href="<?=asset('/css/header.css');?>">
    <link rel="stylesheet" href="<?=asset('/css/contact.css');?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>
<body>


{{--    @yield('header', View::make('layouts.header'))--}}
    @yield('menu', View::make('layouts.menu'))
    @yield('content')


</body>
</html>
