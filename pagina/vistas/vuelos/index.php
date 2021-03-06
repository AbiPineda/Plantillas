<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>
<br><br>




<div class="container-linea-tiempo">
    <div class="row caja-time">
        <!-- Products tab & slick -->
        <div class="col-md-12 ">

            <div class="timeline">
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-red">Información</span>
                </div>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-plane icono-linea bg-blue"></i>
                    <div class="timeline-item">

                        <h3 class="timeline-header"><a href="#">Datos Generales</a> </h3>

                        <div class="timeline-body">
                            <!-- INICIO de primera fila -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Ciudad de Partida</label>
                                        <input type="text" class="form-control" placeholder="Digite nombre del Lugar">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Hora</label>
                                        <select class="form-control">
                                            <option>00:00</option>
                                            <option>01:00</option>
                                            <option>02:00</option>
                                            <option>03:00</option>
                                            <option>04:00</option>
                                            <option>05:00</option>
                                            <option>06:00</option>
                                            <option>07:00</option>
                                            <option>08:00</option>
                                            <option>08:00</option>
                                            <option>10:00</option>
                                            <option>11:00</option>
                                            <option>12:00</option>
                                            <option>13:00</option>
                                            <option>14:00</option>
                                            <option>15:00</option>
                                            <option>16:00</option>
                                            <option>17:00</option>
                                            <option>18:00</option>
                                            <option>19:00</option>
                                            <option>20:00</option>
                                            <option>21:00</option>
                                            <option>22:00</option>
                                            <option>23:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de primera fila -->
                            <!-- INICIO de segunda fila -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Ciudad de Llegada</label>
                                        <input type="text" class="form-control" placeholder="Digite nombre del Lugar">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Hora</label>
                                        <select class="form-control">
                                            <option>00:00</option>
                                            <option>01:00</option>
                                            <option>02:00</option>
                                            <option>03:00</option>
                                            <option>04:00</option>
                                            <option>05:00</option>
                                            <option>06:00</option>
                                            <option>07:00</option>
                                            <option>08:00</option>
                                            <option>08:00</option>
                                            <option>10:00</option>
                                            <option>11:00</option>
                                            <option>12:00</option>
                                            <option>13:00</option>
                                            <option>14:00</option>
                                            <option>15:00</option>
                                            <option>16:00</option>
                                            <option>17:00</option>
                                            <option>18:00</option>
                                            <option>19:00</option>
                                            <option>20:00</option>
                                            <option>21:00</option>
                                            <option>22:00</option>
                                            <option>23:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de segunda fila -->
                            <!-- INICIO de 3ra fila -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Adultos (+12 años)</label>
                                        <input type="number" class="form-control" min="1" max="100">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Niños (5 a 11 años)</label>
                                        <input type="number" class="form-control" min="1" max="10">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Bebés (0 a 4 años)</label>
                                        <input type="number" class="form-control" min="1" max="3">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Cantidad de Maletas</label>
                                        <input type="number" class="form-control" min="1" max="3">
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de 3ra fila -->
                        </div>

                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-user icono-linea bg-green"></i>
                    <div class="timeline-item">

                        <h3 class="timeline-header no-border"><a href="#">Opciones Avanzadas</a></h3>
                        <div class="timeline-body">

                            <!-- INICIO de 2da fila -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Aerolínea</label>
                                        <select class="form-control">

                                            <option value="">Aerolineas Argentinas</option>
                                            <option value="">Aeromexico</option>
                                            <option value="">Air Canada</option>
                                            <option value="">Air Europa</option>
                                            <option value="">Air France</option>
                                            <option value="">Air New Zealand</option>
                                            <option value="">Alitalia</option>
                                            <option value="">American Airlines</option>
                                            <option value="">Andes</option>
                                            <option value="">Avianca</option>
                                            <option value="">Azul Linhas Aéreas Brasileiras</option>
                                            <option value="">British Airways</option>
                                            <option value="">Copa Airlines</option>
                                            <option value="">Delta Air Lines</option>
                                            <option value="">Emirates Airline</option>
                                            <option value="">Gol Transportes Aereos</option>
                                            <option value="">Iberia Airlines</option>
                                            <option value="">Interjet</option>
                                            <option value="">KLM Royal Dutch Airlines</option>
                                            <option value="">LATAM</option>
                                            <option value="">Lufthansa</option>
                                            <option value="">Qantas</option>
                                            <option value="">Qatar Airways</option>
                                            <option value="">South African Airways</option>
                                            <option value="">Taca</option>
                                            <option value="">TAME</option>
                                            <option value="">TAP Portugal</option>
                                            <option value="">Turkish Airlines</option>
                                            <option value="">United Airlines</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Alianza</label>
                                        <select class="form-control">

                                            <option value="">Star Alliance</option>
                                            <option value="">One World</option>
                                            <option value="">Sky Team</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Clase</label>
                                        <select class="form-control">

                                            <option value="">Ejecutiva</option>
                                            <option value="">Económica</option>
                                            <option value="">Primera</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tipo de Viaje</label>
                                        <select class="form-control">

                                            <option value="">Aventura</option>
                                            <option value="">Ciudad</option>
                                            <option value="">Cultural</option>
                                            <option value="">Playa</option>
                                            <option value="">Vacaciones Familiares</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de 2da fila -->
                            <!-- Inicio de 1ra fila -->
                            <div class="row">
                                <div class="offset"></div>
                                <div class="col-sm-4">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox" checked>
                                        <label for="checkbox2">
                                            Vuelo sin Escalas
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            Misma Aerolinea
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkbox6" type="checkbox" checked>
                                        <label for="checkbox6">
                                            Equipaje Extra
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de 1ra fila -->
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-comments icono-linea bg-yellow"></i>
                    <div class="timeline-item">

                        <h3 class="timeline-header"><a href="#">Condiciones</a></h3>
                        <div class="timeline-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>*Verificar documentación en orden, pasaporte valido para 6 meses,
                                            cartas
                                            de invitación cuando sean requeridas, permisos o actas notables de
                                            acuerdo a
                                            la Ley Lepina para menores de 18 años.</label>
                                        <label>*Boletos aereos no reembolsables, no endosables y no
                                            transferibles.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-info btn-sm" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Products tab & slick -->

    </div>
</div>

<?php
include_once '../../plantilla/footer.php';
?>

964px