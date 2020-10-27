$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Asesoria/preguntita",
            async: false,
            dataType: "json",
            success: function(data) {
                
                for (let i = 0, ien = data.preguntas.length; i < ien; i++) {
                   // alert('paso');
                   if(data.preguntas[i].opcion=='cerrada'){
                     var $select = $('#'+data.preguntas[i].num_rama);
                    $select.append('<input type="hidden" name="id_pregunta[]" value="'+data.preguntas[i].id_pregunta+'" class="form-control">'+
                                     '<select class="form-control" name="respuesta[]" id="combo'+data.preguntas[i].id_pregunta+'" style="width: 400px;margin-top: 20px">'+
                                        '<option disabled selected>¿'+data.preguntas[i].pregunta+'?</option>'+
                                     '</select>&nbsp&nbsp');

                    //COMO YA CREE EL COMBO SELECCIONO EL ID Y CARGO EL COMBO
                     var $combo = $('#combo'+data.preguntas[i].id_pregunta);

                     //alert(data.preguntas[i].id_pregunta);
                     for (let j = 0, jen = data.opciones.length; j < jen; j++) {
                        //SOLO VA HA LLENAR EL COMBO CUANDO EL ID DE LA PREGUNTA SEA = AL ID 
                        //DE LA PREGUNTA DE LAS OPCIONES RESPUESTAS
                        if (data.preguntas[i].id_pregunta==data.opciones[j].id_pregunta) {
                           
                         $combo.append('<option value=' +data.opciones[j].opciones_respuestas+ '>'+data.opciones[j].opciones_respuestas+
                        '</option>'); 

                        }    
                     }
                   

                   }else{
                    if (data.preguntas[i].mas_respuestas=='Si') {
                       // alert('entre');
                    $select = $('#'+data.preguntas[i].num_rama);
                    $select.append('<input type="hidden" name="id_pregunta[]" value="'+data.preguntas[i].id_pregunta+'" class="form-control">'+
                                   '<div class="form-group multiple-form-group input-group">'+
                              '<input type="text" name="asistiran[]" id="asistiran" class="form-control" placeholder="¿'+data.preguntas[i].pregunta+'?" style="width: 368px; margin-top: 20px">'+
                              '<span class="input-group-btn">'+
                              '<button type="button" class="btn btn-success btn-add" id="btn-asistiran" style="margin-top:19px;">+</button>'+
                             '</span>'+
                             '</div>&nbsp&nbsp');

                    }else{
                    var $select = $('#'+data.preguntas[i].num_rama);
                    $select.append('<input type="hidden" name="id_pregunta[]" value="'+data.preguntas[i].id_pregunta+'" class="form-control">'+
                                   '<input type="text" name="respuesta[]" class="form-control"'+
                                   'placeholder="¿'+data.preguntas[i].pregunta+'?" style="width: 400px; margin-top: 20px">&nbsp&nbsp');
                    }
                   }
                }

            },
            error: function(err) {
                const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay preguntas registradas..!',
                showConfirmButton: true,
            });
            }
        });

    });