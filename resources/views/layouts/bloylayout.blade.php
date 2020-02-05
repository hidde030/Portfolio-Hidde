<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>
    <link rel="stylesheet" href="<?=asset('/css/header.css');?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=asset('/css/blog.css');?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />


</head>
<body class="bg-own">


{{--    @yield('header', View::make('layouts.header'))--}}
    @yield('menu', View::make('layouts.menu'))
<div class="mt-5 header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden ">
    <div class="flex-row align-items-center">
        <div class="container">
            @yield("content")
        </div>
    </div>
</div>
</body>

</html>
