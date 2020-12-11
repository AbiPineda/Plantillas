$(document).ready(function () {
   let explorer = $("#kv-explorer");
   let ListaDatos;
   let idSeleccionado;
   let tabla;
   inicializarValidaciones();
   inicializarTabla();
   inicializarComboTipo();
   inicializarComboContacto();

   //BOTON DE EDITAR
   $(document).on('click', '.btn-group .btn-primary', function () {
      $('#loadingActualizar').show();
      idSeleccionado = $(this).attr("name");

      $.ajax({
         url: URL_SERVIDOR + "SitioTuristico/show?id_sitio_turistico=" + idSeleccionado,
         method: "GET"
      }).done(function (response) {
         let lista = response.sitios;
         if (lista) {
            console.log(lista);
            //MANDALOS LOS VALORES AL MODAL
            document.getElementById("nombre").value = lista[0].nombre_sitio;
            document.getElementById("precio_sitio").value = lista[0].precio_sitio;
            document.getElementById("coordenadas").value = lista[0].latitud + " " + lista[0].longitud;
            document.getElementById("descripcion").value = lista[0].descripcion_sitio;
            document.getElementById("ComboTipo").value = response.sitios[0].id_tipo_sitio;
            $('#ComboTipo').trigger('change');
            document.getElementById("contacto_servicio").value = response.sitios[0].id_contacto;
            $('#contacto_servicio').trigger('change');
         }
      }).fail(function (response) {
         console.log(response);
      }).always(function (xhr, opts) {
         $('#modal-editar').modal('show');
         $('#loadingActualizar').hide();
      });;
   });
   //BOTON EDITAR LA FOTO
   $(document).on('click', '.btn-group .btn-warning', function () {
      $('#modal-imagenes').modal('show');
      let identificador = $(this).attr("name");
      let nombreTabla = 'sitio_turistico';
      let informacionAdicional = { tipo: nombreTabla, identificador: identificador };
      let urlFotos = [];
      let infoFotos = [];
      console.log(identificador);
      $.ajax({
         url: URL_SERVIDOR + "Imagen/show?tipo=" + nombreTabla + "&identificador=" + identificador,
         method: "GET",

      }).done(function (response) {
         //REST_Controller::HTTP_OK
         response.forEach(element => {
            let informacion = {
               url: URL_SERVIDOR + "Imagen/delete",
               key: element.id_foto
            };
            infoFotos.push(informacion);
            urlFotos.push(element.foto_path);
         });
         explorer.fileinput({
            theme: 'fas',
            language: 'es',
            uploadUrl: URL_SERVIDOR + '/Imagen/save',
            uploadExtraData: informacionAdicional,
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: urlFotos,
            initialPreviewConfig: infoFotos,
            required: true,
            maxFileSize: 2000,
            maxFilesNum: 10,
            allowedFileExtensions: ["jpg", "png", "gif"]

         });
      });
   });
   //BOTON PARA ELIMINAR
   $(document).on('click', '.btn-group .btn-danger', function (evento) {
      idSeleccionado = $(this).attr("name");

      const Toast = Swal.mixin();
      Swal.fire({
         title: '¿Estas seguro?',
         text: "Se Eliminará este registro!",
         icon: 'warning',
         showCancelButton: true,
         cancelButtonText: "Cancelar",
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Sí, eliminar!'
      }).then((result) => {
         if (result.value) {
            eliminar();
         }
      });
   });
   //BOTON PARA ACTUALIZAR
   $(document).on('click', '#btnActualizar', function (evento) {
      evento.preventDefault();//para evitar que la pagina se recargue
      let form = $("#formularioEditar");
      form.validate();
      if (form.valid()) {
         actualizar();
      }
   });
   //CUANDO EL MODAL SE CIERRA
   $('#modal-imagenes').on('hidden.bs.modal', function (e) {
      console.log("cerrando modal")
      explorer.fileinput('destroy');
   })
   //INICIALIZANDO LA TABLA
   function inicializarTabla() {
      tabla = $("#tabla_cliente").DataTable({
         "responsive": true,
         "autoWidth": false,
         "deferRender": true,
         "ajax": {
            "url": URL_SERVIDOR + "Usuario/obtenerUsuario",
            "method": "GET",
            "dataSrc": function (json) {
               //PARA CONPROVAR QUE EL SERVICIO EXISTE
               if (json.usuarios) {
                  for (let i = 0, ien = json.usuarios.length; i < ien; i++) {
                     //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                     html = "";
                     html += '<td>';
                     html += '    <div class="btn-group">';
                     html += '        <button type="button" name="' + json.usuarios[i].id_cliente + '" class="btn btn-primary" data-toggle="modal"';
                     html += '            data-target="">';
                     html += '            <i class="fas fa-edit" style="color: white"></i>';
                     html += '        </button>';
                     html += '        <button type="button" name="' + json.usuarios[i].id_cliente + '" class="btn btn-warning" data-toggle="modal"';
                     html += '            data-target="#modal-galeria">';
                     html += '            <i class="fas fa-image" style="color: white"></i>';
                     html += '        </button>';
                     html += '        <button type="button" name="' + json.usuarios[i].id_cliente + '" class="btn btn-danger" data-toggle="modal"';
                     html += '            data-target="#modal-eliminar">';
                     html += '            <i class="fas fa-trash" style="color: white"></i>';
                     html += '        </button>';
                     html += '    </div>';
                     html += '</td>';
                     json.usuarios[i]["botones"] = html;
                  }
                  $('#loading').hide();
                  return json.usuarios;
               } else {
                  $('#loading').hide();
                  return [];
               }
            }
         },
         columns: [
            { data: "nombre" },
            { data: "correo" },
            { data: "celular" },
            { data: "dui" },
            { data: "botones" },
         ]
      });

   }
   //INICIALIZANDO VALIDACIONES
   function inicializarValidaciones() {
      $('#miFormulario').validate({
         rules: {
            nombre: {
               required: true,
               minlength: 3,
               maxlength: 40
            },
            costos_defecto: {
               required: true,
               number: true,
               min: 0
            },
            informacion_contacto: {
               required: true,
               minlength: 10,
            },
            descripcion_servicio: {
               required: true,
               minlength: 10,
            }
         },
         messages: {
            nombre: {
               required: "Ingrese un nombre",
               minlength: "Logitud del nombre debe ser mayor a 3",
               maxlength: "Logitud del nombre no debe exceder a 40",
            },
            costos_defecto: {
               required: "Ingrese un numero",
               number: "Ingrese un numero",
               min: "Debe de ser mayor que 0"
            },
            informacion_contacto: {
               required: "La informacion de contacto es necesaria",
               minlength: "Debe de tener una longitud minima de 10",
            },
            descripcion_servicio: {
               required: "La descripcion del servico es necesaria",
               minlength: "Debe de tener una longitud minima de 10",
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
   function actualizar() {
      $('#loadingActualizar').show();
      let myCoordnada = document.getElementById("coordenadas").value;
      myCoordnada = myCoordnada.split(', ');

      let data = {
         "id_sitio_turistico": idSeleccionado,
         "nombre_sitio": document.getElementById("nombre").value,
         "longitud": myCoordnada[1],
         "latitud": myCoordnada[0],
         "descripcion": document.getElementById("descripcion").value,
         "tipo": document.getElementById("ComboTipo").value,
         "informacion_contacto": document.getElementById("contacto_servicio").value,
         "precio_sitio": document.getElementById("precio_sitio").value,

      };
      ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
      $.ajax({
         url: URL_SERVIDOR + "SitioTuristico/update",
         method: "PUT",
         timeout: 0,
         data: data
      }).done(function (response) {
         //REST_Controller::HTTP_OK
         const Toast = Swal.mixin();
         Toast.fire({
            title: 'Exito...',
            icon: 'success',
            text: response.mensaje,
            showConfirmButton: true,
         }).then((result) => {
            $('#modal-editar').modal('hide');;
            tabla.ajax.reload(null, false);
         });
      }).fail(function (response) {
         console.log(response);

         const Toast = Swal.mixin();
         Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: "ERROR EN ENVIO DE INFORMACION",
            showConfirmButton: true,
         });

      }).always(function (xhr, opts) {
         //  $('#loadingActualizar').hide();
      });
   }
   function eliminar() {
      let data = {
         "id_sitio_turistico": idSeleccionado
      };
      ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO

      $.ajax({
         url: URL_SERVIDOR + "SitioTuristico/elimination",
         method: "DELETE",
         timeout: 0,
         data: data
      }).done(function (response) {
         //REST_Controller::HTTP_OK
         const Toast = Swal.mixin();
         Toast.fire({
            title: 'Exito...',
            icon: 'success',
            text: response.mensaje,
            showConfirmButton: true,
         }).then((result) => {
            tabla.ajax.reload(null, false);
         });
      }).fail(function (response) {

         console.log(response);
         const Toast = Swal.mixin();
         Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: "ERROR EN EL ENVIO DE INFORMACION",
            showConfirmButton: true,
         });

      }).always(function (xhr, opts) {
         $('#loadingActualizar').hide();
      });
   }
});