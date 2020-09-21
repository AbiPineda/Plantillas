<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Todos los derechos reservados &copy; <a href="#">UES 2020 </a>.</strong>
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=$base_url?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$base_url?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=$base_url?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$base_url?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$base_url?>dist/js/demo.js"></script>


<!-- DataTables -->
<script src="<?= $base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>  





    <!--  necesario para que funcione el calendiario con limites-->
    <script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= $base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?= $base_url ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?= $base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?= $base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <script src="<?= $base_url ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="<?= $base_url ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
    </script>

    

    <!--  necesaio paa que sirva la foto con vista preevia-->
    <script src="<?= $base_url ?>js/foto.js"></script>
<!-- jQuery UI -->
<script src="<?= $base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->

<!-- fullCalendar 2.2.5 -->
<script src="<?= $base_url ?>plugins/moment/moment.min.js"></script>
<script src="<?= $base_url ?>plugins/fullcalendar/main.min.js"></script>
<script src="<?= $base_url ?>plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?= $base_url ?>plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?= $base_url ?>plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?= $base_url ?>plugins/fullcalendar-bootstrap/main.min.js"></script>
<script src='<?= $base_url ?>plugins/fullcalendar/locales/es.js'></script>



<script type="text/javascript">
  //al momento de borrar la funcion carga_contenido
  //me dio problemas la pantalla ver_sitios, disponibilidad como es el mismo diseño.
  // de ninguna manera de las tipicas me direcciono
  //por eso me toco que hacer esta funcion
  //si no les parece y lo logran hacer diferente adelante
  //ahi les deje una forma de mandar id por url en ver_sitios
    function redireccionar(pagina){
  addEventListener('click',function (event) {
  event.preventDefault(); //esto cancela el comportamiento del click
   setTimeout(()=> location.href=""+pagina,1000);
});
};
 
</script>





<script type="text/javascript">
     window.addEventListener('load', ()=>{
         if( localStorage.getItem('contenido') != null){
               cargar_contenido('contenido_principal', localStorage.getItem('contenido'));
           }
     });
     

     
     
    </script>
    
    
    
    
    <!--contenido principal-->
    <script type="text/javascript">
        function cargar_contenido(contenedor,contenido){
            localStorage.setItem('contenido',contenido);
            //alert(contenido);
            //alert(contenedor);
          $("#"+contenedor).load(contenido);
          //alert(contenido);
        }
    </script>


</body>
</html>