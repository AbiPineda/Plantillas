<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
  include_once '../../plantillas/barra_lateral.php';
?>


<div class="content-wrapper" style="min-height: 1185.73px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Tours Activos</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
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
                  <h3 class="card-title">Próximos Tours</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="tabla_tour" class="table table-bordered table-striped">
                     <thead style="text-align: center;">
                        <tr>
                           <th>Nombre del Tour</th>
                           <th>Fecha de salida</th>

                           <th>tipo</th>
                           <th>Acciones</th>

                        </tr>
                     </thead>
                     <tbody style="text-align: center;">
                        <tr>
                           <td>!VAMONOS A COSTA RICA¡</td>
                           <td>DEL 4 AL 9 DE ABRIL 2019</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    href="<?= $base_url ?>vistas/tours/itinerario.php">
                                    <i class="fas fa-image" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    href="<?= $base_url ?>vistas/tours/itinerario.php">
                                    <i class="fa fa-road" style="color: white;"></i>
                                 </a>
                                 <a type="button" class="btn btn-info"
                                    href="<?= $base_url ?>vistas/tours/itinerario.php">
                                    <i class="fa fa-signal" style="color: white"></i>
                                 </a>

                                 <!-- <a type="button" class="btn btn-success"
                                    href="<?= $base_url ?>vistas/tours/itinerario.php">
                                    <i class="fas fa-eye" style="color: white"></i>
                                 </a> -->


                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡¡¡VAMONOS A ORIENTE - VOLCAN DE CONCHAGUA!!!</td>
                           <td>FECHA: 22 DE FEBRERO DE 2020</td>
                           <td>Nacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>VÁMONOS A NICARAGUA</td>
                           <td>DEL 4 AL 8 DE ABRIL 2020</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</td>
                           <td>FECHA: Paquete disponible año 2020</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                           <td>02 AL 05 DE ENERO</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                           <td>DEL 16 AL 17 DE NOVIEMBRE 2019</td>
                           <td>Nacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>!VAMONOS A COSTA RICA¡</td>
                           <td>DEL 4 AL 9 DE ABRIL 2019</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡¡¡VAMONOS A ORIENTE - VOLCAN DE CONCHAGUA!!!</td>
                           <td>FECHA: 22 DE FEBRERO DE 2020</td>
                           <td>Nacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>VÁMONOS A NICARAGUA</td>
                           <td>DEL 4 AL 8 DE ABRIL 2020</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</td>
                           <td>FECHA: Paquete disponible año 2020</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                           <td>02 AL 05 DE ENERO</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                           <td>DEL 16 AL 17 DE NOVIEMBRE 2019</td>
                           <td>Nacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>

                        <tr>
                           <td>!VAMONOS A COSTA RICA¡</td>
                           <td>DEL 4 AL 9 DE ABRIL 2019</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group ">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡¡¡VAMONOS A ORIENTE - VOLCAN DE CONCHAGUA!!!</td>
                           <td>FECHA: 22 DE FEBRERO DE 2020</td>
                           <td>Nacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>VÁMONOS A NICARAGUA</td>
                           <td>DEL 4 AL 8 DE ABRIL 2020</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</td>
                           <td>FECHA: Paquete disponible año 2020</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                           <td>02 AL 05 DE ENERO</td>
                           <td>Internacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                           <td>DEL 16 AL 17 DE NOVIEMBRE 2019</td>
                           <td>Nacional</td>
                           <td>
                              <div class="btn-group">
                                 <a type="button" class="btn btn-primary"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-edit" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-danger"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')">
                                    <i class="fas fa-trash" style="color: white"></i>
                                 </a>

                                 <a type="button" class="btn btn-warning"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                 </a>
                                 <a type="button" class="btn btn-success"
                                    onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')">
                                    <i class="fas fa-car" style="color: white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>

                     </tbody>



                     <tfoot>
                        <tr>
                           <th>Rendering engine</th>
                           <th>Browser</th>
                           <th>Platform(s)</th>
                           <th>Engine version</th>

                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>

<?php
  include_once '../../plantillas/footer.php';
?>

<script>
$(function() {
   $("#tabla_tour").DataTable({
      "responsive": true,
      "autoWidth": false,
   });
});
</script>