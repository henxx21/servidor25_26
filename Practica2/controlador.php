<?php
session_start();
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
                    
                    header("Location: proyecto.php");
            };
        };     



?>

