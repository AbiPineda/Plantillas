<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';?>
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"type="text/css" />
<?php include_once '../../plantillas/barra_lateral.php';?>

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>

                            <small> Registro de Información Migratoria</small>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Información Migratoria</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- ./row -->
                <div class="row">
                    <div class="col-12 col-sm-1"></div>
                    <div class="col-12 col-sm-10">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                   
                                   
                                </ul>
                            </div>
                            <div class="card-body">
                            <form id="migratorio-form" name="register-form" onsubmit="return false" class="form-inline" role="form">
                                <div style="width: 200px;"></div>

                               <select name="id_cita" id="citas_dias" class="form-control" style="width: 400px; margin-top: 20px" required="true">
                                </select>
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                       <!--<div class="form-group" id="1"> 
                                         <input type="hidden" class="form-control" placeholder="esta es una respuesa" id="mail" placeholder="esta es otra ´reg">
                                         <input type="email" class="form-control" id="mail" placeholder="esta es una preguntas" style="width: 400px; margin-top: 20px">&nbsp&nbsp
                                         <input type="hidden" class="form-control" placeholder="esta es una respuesa" id="mail" placeholder="esta es otra ´reg">
                                         <input type="email" class="form-control" id="mail" placeholder="esta es una preguntas" style="width: 400px; margin-top: 20px">&nbsp&nbsp
                            <div class="form-group multiple-form-group input-group">
                              <input type="text" name="asistiran[]" id="asistiran" class="form-control" placeholder="Digite el nombre" style="width: 368px; margin-top: 20px">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-success btn-add" id="btn-asistiran" style="margin-top:19px;">+</button>
                             </span>
                             </div>&nbsp&nbsp
                             <div class="form-group multiple-form-group input-group">
                              <input type="text" name="asistiran[]" id="asistiran" class="form-control" placeholder="Digite el nombre" style="width: 368px; margin-top: 20px">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-success btn-add1" id="btn-asistiran" style="margin-top:19px;">+</button>
                             </span>
                             </div>&nbsp&nbsp
                                          
                                         </div>

                                         <div class="form-group">
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="width: 400px;margin-top: 20px">
                                                <option>¿Esta casado por que quiere o lo obligaron?</option>
                                                <option>si</option>
                                                <option>No</option>
                                                
                                            </select>&nbsp&nbsp
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="width: 400px;margin-top: 20px">
                                                <option>¿Esta casado?</option>
                                                
                                            </select>&nbsp&nbsp
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="width: 400px;margin-top: 20px">
                                                <option>¿Esta casado?</option>
                                                
                                            </select>&nbsp&nbsp
                                             
                                         </div>
                                           
                                        </div>-->
                   
                                      
                                   
                                </div><!--fin de una pestaña-->
                            </br>
                            <div style="width: 400px;"></div>
                             <div style="width: 400px;">
                                 <button type="button" id="btnFormulario" class="btn btn-primary btn-sm" style=" margin-top: 10px; color: white">Guardar</button>
                                <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px; color: white" data-dismiss="modal">Cancelar</button>
                                 
                             </div>
                                
                                </form>
                                </div>


                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-12 col-sm-1"></div>
            </div>


        </section>
    </div>
</div>

<?php
  include_once '../../plantillas/footer.php';
?>
 <script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/ramas.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/input.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/preguntas.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/insertar-formulario.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>



