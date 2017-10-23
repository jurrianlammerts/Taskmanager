<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo application</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<nav class="side-nav">
    <ul>
        <li><img src="http://www.bighedz.com/370-thickbox_default/donald-trump-life-size-celebrity-face-mask.jpg"></li>
        <li><a href="{{ route('home') }}"><i class="fa fa-line-chart"></i> Dashboard</a></li>
        <li><i class="fa fa-cog"></i> Settings</li>
        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" ></i>Log out</a></li>
    </ul>
</nav>


@yield('content')



