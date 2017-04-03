<?php
/*
 *  This is our default layout for our application.
 * It defines the common header, main and footer sections.
 *
 * Different layouts can be added to customise the base template of the website
 */

?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Ignite Online - Portal</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>

    <script src="{{ mix('js/app.js') }}"></script>
    @if(file_exists(getcwd() . '/build/favicon.html'))
        <?= file_get_contents(getcwd() . '/build/favicon.html') ?>
    @endif
</head>
<body class="@yield('bodyClass')">
<section id="app">
    <!-- header -->
    <header class="main-header">
        @if(Auth::check())
            @include("templates.header")
            @yield("header")
        @endif
    </header>
    <!-- /. header -->

    <!-- main content -->
    <div class="container-fluid">
        <div class="row content">
            @yield("main")
        </div>
    </div>
    <!-- /.main content -->

</section>
</body>
</html>
