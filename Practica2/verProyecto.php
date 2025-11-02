<?php

    include_once ("cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
            <?php
            echo"Nombre: " . $_REQUEST['nombre'] . "";
            ?>
        </h5>
        <p class="card-text">
            <?php
            echo"Fecha Inicio: " . $_REQUEST['fechaInicio'] . "";
            ?>
        </p>
        <p class="card-text">
            <?php
            echo"Fecha Prevista: " . $_REQUEST['fechaFinPrevista'] . "";
            ?>
        </p>
        <p class="card-text">
            <?php
            echo"Dias transcurridos: " . $_REQUEST['diasTranscurridos'] . "";
            ?>   
        </p>
        <p class="card-text">
            <?php
            echo"Porcentaje Completado: " . $_REQUEST['porcentajeCompletado'] . "";
            ?>
        </p>
        <p class="card-text">
            <?php
            echo"Importancia: " . $_REQUEST['importancia'] . "";
            ?>
        </p>
        
        <a class="btn btn-primary btn-sm mb-2" href="proyecto.php">Volver</a>
        

      </div>
    </div>
  </div>
</div>





    
</body>
</html>