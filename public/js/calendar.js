document.addEventListener('DOMContentLoaded', function() {

  let formulario = document.querySelector("form");

  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:"es",
    displayEventTime: false,
    headerToolbar:{
      left:'prev,next today',
      center:'title',
      right:'dayGridMonth'//,timeGridWeek,listWeek'
    },
    events:"/recordatorio/mostrar",
    dateClick:function(info){
      formulario.reset();
      formulario.start.value=info.dateStr;
      formulario.end.value=info.dateStr;
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
      $("#eventoCalendarioModal").modal("show");
    }

  });
  calendar.render();
  document.getElementById("btnEliminar").addEventListener("click",function(){
    enviarDatos("/recordatorio/borrar/"+formulario.id.value);
  });

  document.getElementById("btnModificar").addEventListener("click",function(){
    enviarDatos("/recordatorio/actualizar");
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