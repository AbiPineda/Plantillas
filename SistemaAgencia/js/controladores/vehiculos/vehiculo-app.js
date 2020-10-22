$(document).ready(function () {
    let explorer = $("#kv-explorer");
    let idVehiculo;
    let tabla;
    inicializarComboCategoria();

    // inicializarValidaciones();
    inicializarTabla();


    //BOTON MOSTRAR VEHICULO
    $(document).on('click', '.btn-group .btn-secondary', function () {
        console.log("MOSTRAR");
        $('#loadingActualizar').hide();
        idVehiculo = $(this).attr("name");
        fila = $(this).closest("tr");


        placaSeleccionado = fila.find('td:eq(0)').text();
        anioSeleccionado = fila.find('td:eq(1)').text();
        precioSeleccionada = fila.find('td:eq(2)').text();
        combustibleSeleccionado = fila.find('td:eq(3)').text();
        categoriaSeleccionado = fila.find('td:eq(4)').text();
        marcaSeleccionado = fila.find('td:eq(5)').text();


        //MANDALOS LOS VALORES AL MODAL
        document.getElementById("placa").value = placaSeleccionado;
        document.getElementById("anio").value = anioSeleccionado;
        document.getElementById("precio_diario").value = precioSeleccionada;
        document.getElementById("tipoCombustible").value = combustibleSeleccionado;
        document.getElementById("idcategoria").val = categoriaSeleccionado;
        document.getElementById("marca").val = marcaSeleccionado;

        $('#modal-ver').modal('show');

    });
    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function () {
        $('#loadingActualizar').hide();
        idVehiculo = $(this).attr("name");
        fila = $(this).closest("tr");

        placaSeleccionado = fila.find('td:eq(0)').text();
        anioSeleccionado = fila.find('td:eq(1)').text();
        precioSeleccionada = fila.find('td:eq(2)').text();
        combustibleSeleccionado = fila.find('td:eq(3)').text();

        //MANDALOS LOS VALORES AL MODAL
        document.getElementById("placa").value = placaSeleccionado;
        document.getElementById("anio").value = anioSeleccionado;
        document.getElementById("precio_diario").value = precioSeleccionada;
        document.getElementById("tipoCombustible").value = combustibleSeleccionado;

        $('#modal-editar').modal('show');

    });
    //BOTON EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function () {
        $('#modal-imagenes').modal('show');
        let identificador = $(this).attr("name");
        let nombreTabla = 'servicios_adicionales';
        let informacionAdicional = { tipo: nombreTabla, identificador: identificador };
        let urlFotos = [];
        let infoFotos = [];

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
        idVehiculo = $(this).attr("name");
        fila = $(this).closest("tr");

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
            console.log(result);
            if (result.value) {
                eliminar();
            }
        })
    });
    //BOTON PARA ACTUALIZAR
    $(document).on('click', '#btnActualizar', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#miFormulario");
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

    function inicializarTabla() {
        tabla = $("#tabla_vehiculos").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "vehiculo/vehiculos",
                "method": "GET",
                "dataSrc": function (json) {
                    console.log(json);

                    if (json.autos) {
                        for (let i = 0, ien = json.autos.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-secondary" data-toggle="modal"';
                            html += '            data-target="#modal-ver">';
                            html += '            <i class="fas fa-car" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-primary" data-toggle="modal"';
                            html += '            data-target="#modal-editar">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-warning" data-toggle="modal"';
                            html += '            data-target="#modal-galeria">';
                            html += '            <i class="fas fa-image" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.autos[i]["botones"] = html;

                        }
                        $('#loading').hide();
                        return json.autos;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "placa" },
                { data: "anio" },
                { data: "precio_diario" },
                { data: "tipoCombustible" },
                { data: "botones" },
            ]
        });

    }
    function inicializarValidaciones() {
        $('#miFormulario').validate({
            rules: {
                placa: {
                    required: true,
                    minlength: 3,
                    maxlength: 40
                },
                anio: {
                    required: true,
                    number: true,
                    min: 2010
                },
                tipoCombustible: {
                    required: true,
                    minlength: 10,
                },
                precio_diario: {
                    required: true,
                    number: true,
                    min: 1
                }
            },
            messages: {
                placa: {
                    required: "Ingrese un nombre",
                    minlength: "Logitud del nombre debe ser mayor a 3",
                    maxlength: "Logitud del nombre no debe exceder a 40",
                },
                anio: {
                    required: "Ingrese un numero",
                    number: "Ingrese un numero",
                    min: "Debe de ser mayor que 0"
                },
                tipoCombustible: {
                    required: "La informacion de contacto es necesaria",
                    minlength: "Debe de tener una longitud minima de 10",
                },
                precio_diario: {
                    required: "Ingrese un numero",
                    number: "Ingrese un numero",
                    min: "Debe de ser mayor que 0"
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
        let data = {
            "idvehiculo": idVehiculo,
            "placa": document.getElementById("placa").value,
            "anio": document.getElementById("anio").value,
            "precio_diario": document.getElementById("precio_diario").value,
            "tipoCombustible": document.getElementById("tipoCombustible").value

        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        $.ajax({
            url: URL_SERVIDOR + "vehiculo/actualizarVehiculo",
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
            $('#loadingActualizar').hide();
        });
    }

    function eliminar() {
        let data = {
            "idvehiculo": idVehiculo
        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO

        $.ajax({
            url: URL_SERVIDOR + "vehiculo/eliminarVehiculo",
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
    function inicializarComboCategoria() {
        //COMBO DE CONTACTOS
        $.ajax({
            url: "http://localhost/API-REST-PHP/index.php/categoriasAutos/categorias",
            method: "GET"
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let myData = [];
            if (response.categorias) {
                let lista = response.categorias;
                for (let index = 0; index < lista.length; index++) {
                    myData.push({
                        id: lista[index].idcategoria,
                        text: lista[index].nombre
                    });
                }
                $('#comboCategoria').select2(
                    { data: myData }
                );
            } else {
                $('#comboCategoria').select2();
            }
        }).fail(function (response) {
            $('#comboCategoria').select2();

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }
});