 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Esta seguro que desea cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Logout" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal Nuevo Cliente -->
 <div class="modal fade" id="nuevoCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Cliente</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fnc">
                     <div class=" form-floating">
                         <input type="text" class="form-control" name="nombre" placeholder="Juan Perez">
                         <label for="floatingInput">Nombre</label>
                     </div>
                     <div class="form-floating">
                         <input type="date" class="form-control" name="fechaInicio" placeholder="01-05-2025">
                         <label for="floatingInput">Fecha Inicio</label>
                     </div>
                     <div class="form-floating">
                         <input type="date" class="form-control" name="fechaFinPrevista" placeholder="01-06-2026">
                         <label for="floatingInput">Fecha Fin Prevista</label>
                     </div>
                     <div class="form-floating">
                         <input type="number" class="form-control" name="diasTranscurridos" placeholder="99">
                         <label for="floatingInput">Dias Transcurridos</label>
                     </div>
                     <div class="form-floating">
                         <input type="number" class="form-control" name="porcentajeCompletado" placeholder="80">
                         <label for="floatingInput">Porcentaje Completado</label>
                     </div>
                     <div class="form-floating">
                         <input type="number" class="form-control" name="importancia" placeholder="1">
                         <label for="floatingInput">Importancia</label>
                     </div>
                 </form>

             </div>

             <div class="modal-footer">
                 <a href="proyecto.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button></a>
                 <button type="submit" class="btn btn-primary" name="nuevoCliente" form="fnc">Guardar</button>
             </div>

         </div>
     </div>
 </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
