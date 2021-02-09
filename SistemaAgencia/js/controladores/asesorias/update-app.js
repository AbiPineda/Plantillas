 $("#btnActualizar").on('click', function(e) {

        e.preventDefault();
        // recolectarDatos();
         $.ajax({
            url: "http://localhost/API-REST-PHP/index.php/Cita/updateCita",
            method: 'POST',
            data: $("#update-form").serialize()

        }).done(function (response) {

          $("#recargar2").load(" #recargar2");//recargar solo un div y no toda la pagina
          $('#inputs').empty();//vaciar los inputs dinamicos
          $("#modal_eventos").modal('toggle');
          $('#calendar').fullCalendar('refetchEvents');
        
            //REST_Controller::HTTP_OK
            //let respuestaDecodificada = JSON.parse(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                //location.reload(); NO QUIERO QUE RECARGUE ME ACTUALIZA SOLA
            });

        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            let respuestaDecodificada = JSON.parse(response.responseText);
            let listaErrores = "";

            if (respuestaDecodificada.errores) {
                ///ARREGLO DE ERRORES 
                let erroresEnvioDatos = respuestaDecodificada.errores;
                for (mensaje in erroresEnvioDatos) {
                    listaErrores += erroresEnvioDatos[mensaje] + "\n";
                     //toastr.error(erroresEnvioDatos[mensaje]);
                };
            } else {
                listaErrores = respuestaDecodificada.mensaje
            }
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        })

    });