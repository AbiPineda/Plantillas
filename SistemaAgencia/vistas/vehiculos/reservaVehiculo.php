<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php'; ?>
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
<?php
include_once '../../plantillas/barra_lateral.php';
?>
<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reserva de Vehiculo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Reservar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red">Información</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-comments bg-gradient-blue"></i>
                        <div class="timeline-item">
                            <!--<span class="time"><i class="fas fa-clock"></i> 12:05</span>-->
                            <h3 class="timeline-header"><a href="#">Datos Generales:</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="form-group">
                                            <label>Seleccione el Cliente</label>
                                            <select name="comboUsuario" id="comboUsuario" class="form-control">
                                                <option value="">Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <br>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="btnNuevoCliente"
                                                name="btnNuevoCliente" style="margin-top: 10px; width: 100%;">+</button>
                                        </span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->

                    <!-- timeline item -->
                    <div id="formulario">
                        <i class="fas fa-box-open bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Opciones Adicionales</a></h3>

                            <div class="timeline-body">
                                <form id="datosGenerales-form" name="register-form" onsubmit="return false">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="cars">Dirección de Recogida</label>
                                                <input name="direccionR" id="direccionR" type="text"
                                                    class="form-control" placeholder="Digite la dirección de recogida">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="cars">Dirección de Devolución</label>
                                                <input name="direccionD" id="direccionD" type="text"
                                                    class="form-control"
                                                    placeholder="Digite la dirección de devolución">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="cars">Fecha y Hora</label>
                                                <div class="input-group">
                                                    
                                                    <input type="text" class="form-control float-right"
                                                        id="reservationtime">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label for="cars">Seleccione Servicio</label>
                                                <select name="comboServicio" id="comboServicio" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="cars">Costo($)</label>
                                                <input name="costo" id="costo" type="text" disabled class="form-control"
                                                    placeholder="Costo">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group" id="mostrar">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer" style="text-align: right;">
                                        <a class="btn btn-info btn-sm" id="agregarTabla"
                                            style="color: white">Agregar</a>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div id="tabla">
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href="#">Agregando Información</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <table id="add-tabla" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Servicio</th>
                                                    <th>Costo</th>
                                                    <th>Cantidad</th>
                                                    <th>Sub Total</th>
                                                    <th>Acción</th>
                                                    <th>id</th>
                                                    <th>contador</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1"> </div>
                                    <div class="col-md-3  ">
                                        <label class="text-primary "> Total de Encomienda: </label>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label id="total" class="text-primary "> $0</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1"> </div>
                                    <div class="col-md-3  ">
                                        <label class="text-success "> Comisión de Agencia: </label>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label id="comision" class="text-success "> $0</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1"> </div>
                                    <div class="col-md-3  ">
                                        <label class="text-danger "> Total de cliente: </label>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label id="totalCliente" class="text-danger "> $0</label>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="timeline-footer" style="text-align: right;">
                                <button name="btnguardar" id="btnImprimir" class="btn btn-secondary btn-sm"
                                    style="color: white">Imprimir</button>
                                <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>



</div>

<?php
include_once '../../plantillas/footer.php';
?>
<script type="text/javascript">

//Date range picker
$('#reservationdate').datetimepicker({
    format: 'LA'
});
//Date range picker
$('#reservation').daterangepicker()
//Date range picker with time picker
$('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY hh:mm A'
    }
})
</script>

<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?= $base_url ?>js/controladores/conf.js"></script>

<script src="<?= $base_url ?>js/controladores/client/comboUsuario.js"></script>
<script src="<?= $base_url ?>js/controladores/vehiculos/comboServicio.js"></script>
<script src="<?= $base_url ?>js/controladores/vehiculos/reservaVehiculo.js"></script>

<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>

<?php include_once '../../plantillas/cierre.php'; ?>