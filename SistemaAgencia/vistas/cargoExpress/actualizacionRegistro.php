<!--para las tablas que cargan en este archivo-->
<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>

<!--****************fin****************-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-top: -12px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Actualización de Envió</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Actualización de Envió</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">


                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-save bg-gradient-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-address-book"></i>Registro</span>
                                <h3 class="timeline-header"><a href="#">Registro de actualización</a></h3>
                                <div class="timeline-body" style="margin-top: 7px;">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <form id="task-form">
                                                    <div class="form-group">
                                                        <label>Encomienda</label>
                                                        <input type="text" id="name" placeholder="Encomienda" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input type="date" id="name" placeholder="Encomienda" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lugar</label>
                                                        <input type="date" id="name" placeholder="Lugar" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea id="description" cols="10" rows="3" class="form-control" placeholder="Escriba la Descripción"></textarea>
                                                    </div>

                                                    <input type="hidden" id="taskId">
                                                    <div >
                                                        <div class="timeline-footer" style="text-align: right;">
                                                            <a class="btn btn-primary btn-sm" style="color: white">Guardar</a>
                                                            <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END timeline item -->





                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">Actualización de Envió</span>
                        </div>
                        <!-- /.timeline-label -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php
  include_once '../../plantillas/footer.php';
?>

<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 5,
            "responsive": true,
            "oLanguage": {
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando del (_START_ al _END_) de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando del 0 al 0  de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Por favor espere - cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>

<!-- /.content-wrapper -->
<!--para la paginacion de las tablas-->


<!--fin de la paginacion de las tablas-->

