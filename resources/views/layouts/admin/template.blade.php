@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/tailwind.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/all.css"/>
    <link rel="stylesheet" href="/css/font-awesome-animation.min.css"/>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css" defer/>
    @yield('addCSS')
@stop

@section('js')
    <script src="/js/bootstrap.min.js"></script>
    @yield('addJS')
@stop