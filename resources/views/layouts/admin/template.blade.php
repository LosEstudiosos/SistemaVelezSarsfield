@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/tailwind.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome/all.css"/>
    <link rel="stylesheet" href="/css/font-awesome/font-awesome-animation.min.css"/>
    <link rel="stylesheet" href="/css/admin_custom.css">
    @yield('addCSS')
@stop

@section('js')
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/bootstrap/bootstrap.bundle.js"></script>
    <script src="/js/font-awesome/all.js"></script>
    <script src="/js/admin_custom.js"></script>
    @yield('addJS')
@stop