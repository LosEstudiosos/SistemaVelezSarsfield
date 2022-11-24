@extends('layouts.plantilla')

@section('title', 'Velez Sarsfield Calendar')

@section('content_header')
    <h1>Calendario</h1>
@stop

@section('content')
<div class="modal fade" id="eventoCalendarioModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle">Modal title</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    {!! csrf_field() !!}
                    <div class="form-gorup">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId">
                        <small id="helpId" class="form-text text-muted"> Help text</small>
                    </div>
                    <div class="form-gorup">
                        <label for="acuerdo">Acuerdo</label>
                        <input type="text" class="form-control" name="acuerdo" id="acuerdo" aria-describedby="helpId" placeholder="Escribi el acuerdo">
                        <small id="helpId" class="form-text text-muted"> Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="cuerpo">Cuerpo</label>
                        <textarea class="form-control" name="cuerpo" id="cuerpo" rows="3"></textarea>
                    </div>
                    <div class="form-gorup">
                        <label for="fecha_creacion">Fecha</label>
                        <input type="text" class="form-control" name="fecha_creacion" id="fecha_creacion" aria-describedby="helpId" placeholder="dd/mm/aaaa">
                        <small id="helpId" class="form-text text-muted"> Help text</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="submit" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="sticky-top mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">PROBANDO</h3>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#eventoCalendarioModal">
                        botn
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-body p-0">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div>
                <!-- /.card-body -->
            </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
<!-- /.row -->
</div><!-- /.container-fluid -->
@stop



