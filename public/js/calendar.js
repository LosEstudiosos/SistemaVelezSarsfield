document.addEventListener('DOMContentLoaded', function() {

  let formulario = document.getElementById('formulario');

  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:"es",
    displayEventTime: false,
    headerToolbar:{
      left:'prev,next today',
      center:'title',
      right:'timeGridWeek,dayGridMonth,listWeek'
    },
    events:"/admin/calendario/mostrar",
    dateClick:function(info){
      formulario.reset();
      formulario.start.value=info.dateStr;
      formulario.end.value=info.dateStr;
      //esconder y mostrar botones
      formulario.getElementsByClassName("btn btn-success").btnGuardar.hidden = false;
      formulario.getElementsByClassName("btn btn-warning").btnModificar.hidden = true;
      formulario.getElementsByClassName("btn btn-danger").btnEliminar.hidden = true;
      $("#eventoCalendarioModal").modal("show");
    },
    eventClick:function(info){
      var evento = info.event;
      console.log(evento);
      formulario.reset();
      //formulario.id = evento.id;
      document.getElementById("id").value = evento.id;
      document.getElementById("titulo").value = evento.title;
      document.getElementById("start").value = evento.startStr.toString().substring(0, 10);//para obtener año mes dia
      document.getElementById("end").value = evento.endStr.toString().substring(0, 10);
      document.getElementById("tipo_recordatorio_id").value = evento.extendedProps.tipo_recordatorio_id;
      document.getElementById("descripcion").value = evento.extendedProps.descripcion;
      //esconder y mostrar botones
      formulario.getElementsByClassName("btn btn-success").btnGuardar.hidden = true;
      formulario.getElementsByClassName("btn btn-warning").btnModificar.hidden = false;
      formulario.getElementsByClassName("btn btn-danger").btnEliminar.hidden = false;
      $("#eventoCalendarioModal").modal("show");
    }

  });

  calendar.render();

  document.getElementById("btnEliminar").addEventListener("click",function(){
    enviarDatos("/admin/calendario/borrar/"+formulario.id.value);
  });

  document.getElementById("btnModificar").addEventListener("click",function(){
    enviarDatos("/admin/calendario/actualizar");
  });

  $("#nuevoEvento").click(function(){
    formulario.reset();
    formulario.getElementsByClassName("btn btn-success").btnGuardar.hidden = false;
    formulario.getElementsByClassName("btn btn-warning").btnModificar.hidden = true;
    formulario.getElementsByClassName("btn btn-danger").btnEliminar.hidden = true;
  });

  function enviarDatos(url){
    const datos = new FormData(formulario);
    axios.post(baseURL+url,datos).then(
      (respuesta) =>{
        calendar.refetchEvents();
        $("#eventoCalendarioModal").modal("hide");
      }
    ).catch(
      error=>{if(error.response){console.log(error.response.data);}}
    )
  }
/*
  document.getElementById("btnGuardar").addEventListener("click",function(){
    const datos = new FormData(formulario);
    console.log(datos);
    console.log(formulario.title.value);

    axios.post("http://127.0.0.1:8000/calendar/agregar",datos).then(
      (respuesta) =>{
        $("#eventoCalendarioModal").modal("hide");
      }
    )
  });*/
});