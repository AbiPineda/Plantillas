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