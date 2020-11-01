<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
<style>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
}
</style>
<!-- CONTINUAMOS CON LA INICIALIZACION -->
<?php include_once  '../../plantillas/navbar.php'; ?> <?php include_once '../../plantillas/barra_lateral.php'; ?>



<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Servicios Adicionales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Servicios Adicionales</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Generales</h3>
                        <div class="timeline-footer" style="text-align: right;">
                            <a class="btn btn-info btn-sm" style="color: white" data-toggle="modal"
                                data-target="#modal-servicio">Nuevo Servicio</a>


                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tabla_servicios" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Servicio</th>
                                                <th>Descripción</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <!-- /.inicio de loading -->
                                        <div class="overlay-wrapper">
                                            <div id="loading" class="overlay"><i
                                                    class="fas fa-3x fa-sync-alt fa-spin"></i>

                                                <div class="text-bold pt-2">Cargando...
                                                </div>
                                            </div>
                                            <tbody id="tableBody" style="text-align: center;">
                                            </tbody>
                                        </div>
                                        <!-- /.fin de loading -->

                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- End Modal Mostrar-->
</form>



<form id="miFormulario" name="miFormulario" role="form">
    <!-- Modal EDITAR-->
    <div class="modal fade" id="modal-editar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="overlay-wrapper">
                    <div id="loadingActualizar" class="overlay">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <div class="text-bold pt-2">Cargando...
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title">Modificar Vehiculo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <div class="input-group">
                                        <input id="nombre" name="nombre" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <div class="input-group">
                                        <input id="marca" name="marca" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <div class="input-group">
                                        <input id="modelo" name="modelo" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Numero de Placa</label>
                                    <div class="input-group">
                                        <input id="placa" name="placa" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Año</label>
                                    <div class="input-group">
                                        <input id="anio" name="anio" type="number" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Color</label>
                                    <div class="input-group">
                                        <input id="color" name="color" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Transmision</label>
                                    <div class="input-group">
                                        <input id="transmision" name="transmision" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Combustible</label>
                                    <div class="input-group">
                                        <input id="tipoCombustible" name="tipoCombustible" type="text"
                                            class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Precio Diario</label>
                                    <div class="input-group">
                                        <input id="precio_diario" name="precio_diario" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button name="btnActualizar" id="btnActualizar" class="btn btn-info btn-sm"
                            style="color: white">Actualizar</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Modal EDITAR-->
</form>
</div>



<!-- /.MODALES DE BOTONES PARA INSERTAR -->

<!-- /.Cierre de MODAL MARCA -->


<?php 
 include_once './modal-servicio.php';
 include_once '../../plantillas/footer.php';?>

<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/servicios-app.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<?php  include_once '../../plantillas/cierre.php';?>