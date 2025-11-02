<?php
session_start();
// SI NO ESTA VACIO EL BOTON DE LOGIN, COMPROBAR CONTRASEÑA, CREAR SESION Y PINTAR ARRAY DE PROYECTOS POR DEFECTO, DE LO CONTRARIO RETURN AL LOGIN
        if(isset ($_REQUEST['login'])){
            $comprobarMinusulas = strtolower($_REQUEST['contrasena']);
            if((strlen($_REQUEST['contrasena'])<8) || ($comprobarMinusulas == $_REQUEST['contrasena'])){
                header("Location:login.php");
            } else{
                $_SESSION['usuario'] = $_REQUEST['email'];
                $_SESSION['proyectos']= array(
                    array(
                        "id" => 1, 
                        "nombre" => "Proyecto A",   
                        "fechaInicio" => "2023-01-15",
                        "fechaFinPrevista" => "2023-01-15",
                        "diasTranscurridos" => 10,
                        "porcentajeCompletado" => 30,
                        "importancia" => 1
                    ),
                     array(
                        "id" => 2,
                        "nombre" => "Proyecto B",
                        "fechaInicio" => "2023-02-10",
                        "fechaFinPrevista" => "2023-06-30",
                        "diasTranscurridos" => 45,
                        "porcentajeCompletado" => 50,
                        "importancia" => 2
                    ),
                    array(
                        "id" => 3,
                        "nombre" => "Proyecto C",
                        "fechaInicio" => "2023-03-05",
                        "fechaFinPrevista" => "2023-08-15",
                        "diasTranscurridos" => 90,
                        "porcentajeCompletado" => 70,
                        "importancia" => 3
                    ),
                    array(
                        "id" => 4,
                        "nombre" => "Proyecto D",
                        "fechaInicio" => "2023-05-01",
                        "fechaFinPrevista" => "2023-10-01",
                        "diasTranscurridos" => 120,
                        "porcentajeCompletado" => 85,
                        "importancia" => 2
                    ),
                    array(
                        "id" => 5,
                        "nombre" => "Proyecto E",
                        "fechaInicio" => "2023-06-20",
                        "fechaFinPrevista" => "2023-12-20",
                        "diasTranscurridos" => 60,
                        "porcentajeCompletado" => 40,
                        "importancia" => 1
                    )
                    );       
                    $_SESSION['id'] = count($_SESSION['proyectos']);
                    header("Location: proyecto.php");
            };
        };     

// CONTROLADOR DE LA ACCION DE LOS BOTONES

        if(isset ($_REQUEST['accion'])){

            switch($_REQUEST['accion']){

                case 'eliminar'
                    :
                    unset($_SESSION['proyectos'][$_REQUEST['posicion']]);
                    $_SESSION['proyectos'] = array_values($_SESSION['proyectos']);
                    header("Location: proyecto.php");
                    break;
                
                case 'eliminarTodos'
                    :
                    $_SESSION['proyectos'] = [];
                    header("Location: proyecto.php");
                    break;

                case 'ver'
                    :
                    foreach( $_SESSION['proyectos'] as $proyecto){
                        if(strcmp($proyecto['id'],$_REQUEST['id'])==0){
                            $nombre = $proyecto['nombre'];
                            $fechaInicio = $proyecto['fechaInicio'];
                            $fechaFinPrevista = $proyecto['fechaFinPrevista'];
                            $diasTranscurridos = $proyecto['diasTranscurridos'];
                            $porcentajeCompletado = $proyecto['porcentajeCompletado'];
                            $importancia = $proyecto['importancia'];
                        }
                    }
                    
                header("Location: verProyecto.php?id=" . $_REQUEST['id'] . "&nombre=" . $nombre . "&fechaInicio=" . $fechaInicio . 
                "&fechaFinPrevista=" . $fechaFinPrevista . "&diasTranscurridos=" . $diasTranscurridos . "&porcentajeCompletado=" .
                 $porcentajeCompletado . "&importancia=" . $importancia);
            }
        }
// CONTROLADOR DEL FORMULARIO DE NUEVO PROYECTO, INSERTAR LINEA DE PROYECTO        

        if(isset ($_REQUEST['nuevoCliente'])){
            $_SESSION['id']++;
            $nuevoProyecto = array(
                "id" => $_SESSION['id'],
                "nombre" => $_REQUEST['nombre'],
                "fechaInicio" => $_REQUEST['fechaInicio'],
                "fechaFinPrevista" => $_REQUEST['fechaFinPrevista'],
                "diasTranscurridos" => $_REQUEST['diasTranscurridos'],
                "porcentajeCompletado" => $_REQUEST['porcentajeCompletado'],
                "importancia" => $_REQUEST['importancia']
            );
    
    //SI LOS CAMPOS NO ESTAN VACIOS INSERTAR EL NUEVO PROYECTO EN EL ARRAY DE PROYECTOS, SI NO DEVUELVE A PROYECTO.PHP    
        if ( !empty($_REQUEST['nombre']) && !empty($_REQUEST['fechaInicio']) && !empty($_REQUEST['fechaFinPrevista']) && 
             !empty($_REQUEST['diasTranscurridos']) && !empty($_REQUEST['porcentajeCompletado']) && !empty($_REQUEST['importancia']) ) {
                array_push($_SESSION['proyectos'],$nuevoProyecto);
             }
           
            header("Location: proyecto.php");
        } 
        ?>

