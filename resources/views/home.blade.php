@extends('layouts.plantilla')

@section('title' , 'Bienvenido')

@section('header')
    <?php echo $_SESSION['nombre'];?>
@endsection()