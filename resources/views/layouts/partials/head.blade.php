<head>

    <title>{{ config('app.name', 'Consultancy') }}-@yield('title')</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- END META -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- END STYLESHEETS -->
    @yield('page-specific-styles')
</head>
