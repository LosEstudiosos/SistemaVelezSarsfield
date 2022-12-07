@extends('layouts.admin.template')
@section('plugins.FullCalendar', true)

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
            <form action="{{route('admin.calendario.save')}}" method="POST" id="formulario">
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Mas Eventos</h4>
                    </div>
                    <div class="card-body">
                        <!-- the events -->
                        <div id="external-events">
                        <div class="external-event bg-navy">Almuerzo</div>
                        <div class="external-event bg-warning">Vuelta a Clase</div>
                        <div class="external-event bg-info">Hacer la Tarea</div>
                        <div class="checkbox">
                            <label for="drop-remove">
                            <input type="checkbox" id="drop-remove">
                            Eliminar despues de usar
                            </label>
                        </div>
                        </div>
                    </div>
                  <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Crear Evento</h3>
                    </div>
                    <div class="card-body">
                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                        <ul class="fc-color-picker" id="color-chooser">
                            <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-gray" href="#"><i class="fas fa-square"></i></a></li>
                        </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="input-group">
                        <input id="new-event" type="text" class="form-control" placeholder="Titulo">
          
                        <div class="input-group-append">
                            <button id="add-new-event" type="button" class="btn btn-primary">Agregar</button>
                        </div>
                        <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->
                    </div>
                  </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-7">  
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

<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
@section('addCSS')
    <link rel="stylesheet" href="/css/fullcalendar/main.css">
@stop

@section('addJS')
  <script type="text/javascript">
    var baseURL = {!! json_encode(url('/')) !!}
  </script>
  <script src="/js/jquery-3.5.1.js" defer></script>
  <script src="/js/jquery-ui/jquery-ui.min.js" defer></script>
  <script src="/js/calendar.js" defer></script>
  <script>
    $(function () {
  
      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function () {
  
          // create an Event Object (https://fullcalendar.io/docs/event-object)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }
  
          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)
  
          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })
  
        })
      }
  
      ini_events($('#external-events div.external-event'))
  
      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()
  
      var Calendar = FullCalendar.Calendar;
      var Draggable = FullCalendar.Draggable;
  
      var containerEl = document.getElementById('external-events');
      var checkbox = document.getElementById('drop-remove');
      var calendarEl = document.getElementById('calendar');
  
      // initialize the external events
      // -----------------------------------------------------------------
  
      new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function(eventEl) {
          return {
            title: eventEl.innerText,
            backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
            borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
            textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
          };
        }
      });
  
      var calendar = new Calendar(calendarEl, {
        editable  : true,
        droppable : true, // this allows things to be dropped onto the calendar !!!
        drop      : function(info) {
          // is the "remove after drop" checkbox checked?
          if (checkbox.checked) {
            // if so, remove the element from the "Draggable Events" list
            info.draggedEl.parentNode.removeChild(info.draggedEl);
          }
        }
      });
  
      calendar.render();
      // $('#calendar').fullCalendar()
  
      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      // Color chooser button
      $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        // Save color
        currColor = $(this).css('color')
        // Add color effect to button
        $('#add-new-event').css({
          'background-color': currColor,
          'border-color'    : currColor
        })
      })
      $('#add-new-event').click(function (e) {
        e.preventDefault()
        // Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }
  
        // Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.text(val)
        $('#external-events').prepend(event)
  
        // Add draggable funtionality
        ini_events(event)
  
        // Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>
@stop