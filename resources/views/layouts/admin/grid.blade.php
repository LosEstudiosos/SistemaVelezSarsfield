@extends('layouts.admin.template')
@section('plugins.Datatables', true)

@section('content')
<div class="">
    <ul>
        <div class="container">
            <div class="card" id="card_grilla">
                <div class="card-body">
                    @yield('body')
                    <table id="tabla" class="table table-striped align-middle table-bordered table-sm text-center">
                        <thead>
                            <tr class="table-dark">
                                @yield('table_head')
                            </tr>
                        </thead>
                        <tbody class="table-secondary">
                            @yield('table_body')
                        </tbody>
                    </table>
                <div>
            <div>
        </div>
    </ul>    
</div>
@stop

@section('addJS')
    <script src="/js/script.js"></script>
@stop