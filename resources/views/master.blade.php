<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title', 'Bem-vindo(a) ao Íris')
    </title>

    <link rel="icon" href="{{asset('vendor/elisyam/assets/img/favicon.ico')}}">
    @include('vendor.irispainel.partials.scripts.master_css')
    @yield('master_css')
</head>

<body id="page-top">

    @yield('body')

    @include('vendor.irispainel.partials.scripts.master_js')
    @yield('master_js')
</body>

</html>