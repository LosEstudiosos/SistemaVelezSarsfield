@extends('layouts.plantilla')

@section('title' , 'Usuarios - Registrar')

@section('header')
    Bienvenido a la pagina de registrar usuarios
@endsection()

@section('content')
<div class="col-4 bg-white b border border-5 border-dark">
    <form action="almacenar" method="POST">
        <div class="row">
            @csrf
            <div class="col-12 d-flex justify-content-end mt-3">
                <input size="4" class="border-3 b-i" type = "hidden" name="id" placeholder='Id' value="0"/>
            </div>
            <div class="col-6 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="nombre" placeholder='Nombre'/>
            </div>
            <div class="col-6 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="apellido" placeholder='Apellido'/>
            </div>
            <div class="col-6 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="usuario" placeholder='Usuario'/>
            </div>
            <div class="col-6 mt-3">
                <input class="form-control border-3 b-i" type = "password" name="password" placeholder='Contraseña'/>
            </div>
            <div class="col-12 form-floating mt-3">
                <input id="1" class="form-control border-3 b-i" type = "text" name="email" placeholder='email' value="nombre@ejemplo.com"/>
                <label for="1" class="ms-2">Email</label>
            </div>
            <div class="col-12 mt-3">
                <select name="Tipo Usuario" class="form-select" id="">
                    <option selected>Tipo de usuario</option>
                    <option value="1">Profesor</option>
                    <option value="2">Alumno</option>
                    <option value="3">Tutor</option>
                    <option value="4">Preceptor</option>
                </select>
            </div>
            <div class="col-12 mt-3 form-floating">
                <input id="2" class="form-control" type="date" name="fecha"/>
                <label for="2" class="ms-2">Fecha de nacimiento</label>
            </div>
            <div class="col-12 mt-3">
                <select name="Tipo Sexo" class="form-select" id="">
                    <option selected>Tipo de sexo</option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                    <option value="3">Otro</option>
                </select>
            </div>
            <div class="col-8 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="direccion" placeholder='Direccion'/>
            </div>
            <div class="col-4 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="numero" placeholder='Numero'/>
            </div>
            <div class="col-12 mt-3">
                <select name="pais" class="form-select" id="">
                    <option selected>Pais</option>
                </select>
            </div>
            <div class="col-12 mt-3">
                <select name="provincia" class="form-select" id="">
                    <option selected>Provincia</option>
                </select>
            </div>
            <div class="col-12 mt-3">
                <select name="localidad" class="form-select" id="">
                    <option selected>Localidad</option>
                </select>
            </div>
            <div class="col-6 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="telefono" placeholder='Telefono'/>
            </div>
            <div class="col-6 mt-3">
                <input class="form-control border-3 b-i" type = "text" name="cuil" placeholder='Cuil'/>
            </div>
            <div class="col-12 my-3 d-flex justify-content-center">
                <button type="submit" class="btn bt-r btn-info">Registrar</button>
            </div>
        </div>
    </form>
</div>
<div class="col-12 align-self-start text-center">
    <a href="/SistemaVelezSarsfield/public/usuarios" type="submit" class="text-white btn btn-link m-0 bu">Volver</a>
</div>
@endsection()