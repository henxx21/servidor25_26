<?php
    include_once ("cabecera.php");
?>
                 <!--------------------- BOTONES PARA CREAR UN NUEVO PROYECTO Y ELIMINAR TODOS LOS PROYECTOS --------------------------->
                 <?php
                   echo "<a class='btn btn-warning btn-sm mb-2' href='controlador.php?accion=eliminarTodos 'onclick=\"return confirm('¿Eliminar todos los proyectos?');\">Eliminar Todos</a>";
                 ?>
                 
                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#nuevoCliente">
                Nuevo Proyecto
                </button>
           
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Proyectos en Desarrollo</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin Prevista</th>
                                            <th>Dias Transcurridos</th>
                                            <th>Porcentaje Completado</th>
                                            <th>Importancia</th>    
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>

                                    <?php

                                        $posicion = 0;

                                        foreach($_SESSION['proyectos'] as $proyecto){
                                        
                                            echo "<tr>";
                                            echo "<td>" . $proyecto['nombre'] . "</td>";
                                            echo "<td>" . $proyecto['fechaInicio'] . "</td>";
                                            echo "<td>" . $proyecto['fechaFinPrevista'] . "</td>";
                                            echo "<td>" . $proyecto['diasTranscurridos'] . "</td>";
                                            echo "<td>" . $proyecto['porcentajeCompletado'] . "</td>";
                                            echo "<td>" . $proyecto['importancia'] . "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-sm btn-info mr-1' href='controlador.php?accion=ver&id=" .($proyecto['id']) . "'>Ver</a>";
                                            echo "<a class='btn btn-sm btn-danger' href='controlador.php?accion=eliminar&posicion=" .$posicion. "' onclick=\"return confirm('¿Eliminar este proyecto?');\">Eliminar</a>";
                                            echo "</td>";
                                            echo "</tr>";

                                        $posicion++;
                                        }
                                    ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <?php
    include_once ("pie.php");
    ?>

</body>

</html>