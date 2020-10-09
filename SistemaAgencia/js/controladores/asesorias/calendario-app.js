 $(document).ready(function() {
      
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next,today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            customButtons: {
                Miboton: {
                    text: "boton 1",
                    click: function() {
                        alert("Accion del boton");
                    }
                }
            },
            dayClick: function(date, jsEvent, view) {
                $('#modal_eventos').modal();
                $('#txtFecha').val(date.format());

                $('#btnAgregar').prop("disabled", false);
                $('#btnModificar').prop("disabled", true);
                $('#btnEliminar').prop("disabled", true);
                limpiar();


            },
            events: 'http://localhost/API-REST-PHP/index.php/Cita/cita', //aqui pongo la api que e hecho
            //http://localhost/restful/index.php/Calendario/calendario
            eventClick: function(calEvent, jsEvent, view) {

                $('#btnAgregar').prop("disabled", true);
                $('#btnModificar').prop("disabled", false);
                $('#btnEliminar').prop("disabled", false);

                $('#tituloEvento').html(calEvent.motivo);

                $('#txtId').val(calEvent.id_cita);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);
                FechaHora = calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);

                $('#modal_eventos').modal();


            },
            editable: true,
            eventDrop: function(calEvent) {
                $('#txtId').val(calEvent.id_cita);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);
                var fechaHora = calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
                $('#txtHora').val(fechaHora[1]); //todo el modal con los datos

                recolectarDatos();
                enviarInformacion(NuevoEvento, true);


            }

        });
    }); //fin calendario
   