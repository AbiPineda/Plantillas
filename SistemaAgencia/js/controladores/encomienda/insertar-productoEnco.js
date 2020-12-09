$(document).ready(function (){

    //inicializarValidaciones();
  
    //BOTON PARA AGREGAR
    $(document).on('click', '#btn-producto', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#register-form");  
       // form.validate();
         // if (form.valid()) {
            add_producto();
        //}  
        
    });

function inicializarValidaciones() {
    $('#recargar-form').validate({

            rules: {
                combo_rama: {
                   required: true
                }
            },
            messages: {
                combo_rama: {
                    required: "Seleccione la rama"
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

        $('#register-form').validate({

            rules: {
                pregunta: {
                    minlength: 10
                },
                "opcion_respuesta[]": {
                   required: true
                }
            },
            messages: {
                 pregunta:{
                    minlength: "Debe de tener una longitud minima de 10"
                },
                "opcion_respuesta[]": {
                    required: "Seleccione las opciones de respuestas, puede agregar más, pulse el botón agregar más"
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

    }

function llenarCombo(){

    $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Producto/productos",
            dataType: "json",
            success: function(data) {

                var $select = $('#id_producto');
                 $select.append('<option value="">Seleccione</option>');
                $.each(data.product, function(i,index) {
                    $select.append('<option value=' +index.id_producto+ '>' +index.nombre_producto+
                        '</option>');
                });
            },
            error: function(err) {
                $select.append('<option value="">Seleccione</option>');
                var $select = $('#id_producto');
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
        });

}

    
function add_producto() {

        $.ajax({
            url: URL_SERVIDOR+"Producto/producto",
            method: 'POST',
            data: $("#register-form").serialize()

        }).done(function (response) {
        document.getElementById("register-form").reset();
        $('#id_producto').empty();
        llenarCombo();
         $('#add-producto').modal('hide');
        
        //$('#id_producto').load('#id_producto');
         //$('#formulario').empty();//VACIO LOS DIV PARA QUE NO ME LOS MONTE UNO SOBRE OTRO
          //$('#botones').empty();
          

          //$("#recargar").load(" #recargar");//recargar solo un div y no toda la pagina
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

        });


    }
   
});