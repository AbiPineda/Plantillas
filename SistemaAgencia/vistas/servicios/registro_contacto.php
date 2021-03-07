<form id="formularioAgregarContactoServicio" name="formularioAgregarContactoServicio" enctype="multipart/form-data">
   <div class="modal fade" id="modal-agregarContactoServicio">
      <!-- Modal EDITAR-->
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Agregar Contacto</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-7">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Nombre de Contacto</label>
                              <div class="input-group">
                                 <input placeholder="Digite Nombre" type="text" class="form-control"
                                    name="nombreContactoServicio" id="nombreContactoServicio">
                              </div>
                              <!-- /.input group -->
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Teléfono de Contactos</label>
                              <div class="input-group">
                                 <input placeholder="Digite Teléfono" type="text" class="form-control"
                                    id="telefonoContactoServicio" name="telefonoContactoServicio">
                              </div>
                              <!-- /.input group -->
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Correo Electronico</label>
                              <div class="input-group">
                                 <input placeholder="Digite Correo" type="text" class="form-control"
                                    name="correoContactoServicio" id="correoContactoServicio">
                              </div>
                              <!-- /.input group -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-5">
                     <div class="form-group">
                        <div class="kv-avatar">
                           <label>Foto de Contacto</label>
                           <div class="file-loading">
                              <input id="fotoServicio" name="fotoServicio" type="file">
                           </div>
                        </div>
                        <!-- /.input group -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
               <button name="btnAgregarContactoServicio" id="btnAgregarContactoServicio" class="btn btn-info btn-sm"
                  style="color: white">Guardar</button>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- End Modal EDITAR-->
</form>