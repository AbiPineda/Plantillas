<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';?>
<!--LOS SCRIPT ADICIONALES-->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"type="text/css" />
<?php
include_once '../../plantillas/barra_lateral.php';
?>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Producto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Producto</li>
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
                        <i class="fas fa-box-open bg-blue"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Datos Generales</a></h3>

                            <div class="timeline-body">
                                <form id="register-form" name="register-form" onsubmit="return false">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input name="nombre_producto" type="text" class="form-control" placeholder="Introduzca el nombre" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label>Tarifa</label>
                                            <input name="tarifa" type="text" class="form-control" placeholder="Introduzca la tarifa" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label>Comisión</label>
                                            <input name="comision" type="text" class="form-control" placeholder="Introduzca la comisión" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                                </form>
                            </div>
                             
                        </div>
                   
                    </div>

                    <div>
                         <i class="fas fa-save bg-gradient-lightblue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-save"></i>Guardar</span>
                               <h3 class="timeline-header"><a href="#">Guardar Información</a></h3>
                                <div class="timeline-body"><div class="row">
                                  <div class="col-lg-1"></div><div class="col-lg-10"></div>
                                    <div class="col-lg-1"></div>
                                    <div style="text-align: right;width:577px;margin-top:-8px;">
                                <a class="btn btn-primary btn-sm" id="btn-producto" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">Encomiendas</span>
                        </div>
                        <!-- /.timeline-label -->
                </div>
            </div>
        </div>
    </section>
</div>

<?php
  include_once '../../plantillas/footer.php';
?>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/insertar-producto.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>
