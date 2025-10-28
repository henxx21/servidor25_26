<?php
    include_once ("cabecera.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>
        
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
          
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="proyecto.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tablas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                 
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
              

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Proyectos</h1>


                 <!--------------------- BOTONES PARA CREAR UN NUEVO PROYECTO Y ELIMINAR TODOS LOS PROYECTOS --------------------------->
                    <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#nuevoCliente">
                Nuevo Proyecto
            </button>
            <button type="button" class="btn btn-warning btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#eliminarClientes">
                Eliminar todos
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

                                        foreach($_SESSION['proyectos'] as $proyecto){

                                            echo "<tr>";
                                            echo "<td>" . $proyecto['nombre'] . "</td>";
                                            echo "<td>" . $proyecto['fechaInicio'] . "</td>";
                                            echo "<td>" . $proyecto['fechaFinPrevista'] . "</td>";
                                            echo "<td>" . $proyecto['diasTranscurridos'] . "</td>";
                                            echo "<td>" . $proyecto['porcentajeCompletado'] . "</td>";
                                            echo "<td>" . $proyecto['importancia'] . "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-sm btn-info mr-1' href='Controlador.php?accion=ver&id=" . urlencode($proyecto['id']) . "'>Ver</a>";
                                            echo "<a class='btn btn-sm btn-danger' href='Controlador.php?accion=eliminar&id=" . urlencode($proyecto['id']) . "' onclick=\"return confirm('¿Eliminar este proyecto?');\">Eliminar</a>";
                                            echo "</td>";
                                            echo "</tr>";
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