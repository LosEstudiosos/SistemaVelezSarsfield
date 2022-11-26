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
                <h5 class="modal-tittle">Nuevo recordatorio</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('recordatorio.save')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-gorup hidden">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" readonly>
                    </div>
                    <div class="form-gorup">
                        <label for="titulo">Titulo:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" required="1">
                    </div>
                    
                    {{-- <div class="form-gorup">
                        <label for="tipo_recordatorio_id">tipo_recordatorio_id</label>
                        <input type="text" class="form-control" name="tipo_recordatorio_id" id="tipo_recordatorio_id" aria-describedby="helpId">
                    </div> --}}

                    <div class="form-gorup">
                        <label for="titulo">Tipo recordatorio:</label>
                        <select name="tipo_recordatorio_id" class="form-select" id="tipo_recordatorio_id" required="1">
                            <option selected disabled value="">Seleccionar</option>
                            @foreach ($recordatorio as $item)
                                <option value="{{ $item->id }}">{{ $item->tipo }}</option>
                            @endforeach
                            

                        </select>
                    </div>

                    <div class="form-gorup">
                        <label for="start">Fecha inicio</label>
                        <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId">
                    </div>
                    <div class="form-gorup">
                        <label for="end">Fecha fin</label>
                        <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar" onclick="">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar" onclick="">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="sticky-top mb-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menu</h3>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#eventoCalendarioModal" id="nuevoEvento">
                        Nuevo evento
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-10">  
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



