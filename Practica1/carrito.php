<?php
require_once("./cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="Logo de Bootstrap" class="d-inline-block align-top">
                    Tienda en Línea
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link">Mejores precios grantizados</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

        $carrito = array(
            array(
                "id" => 1234,
                "nombre" => "PS4",
                "precio" => 249.99,
                "cant" => 1,
                "iva_r" => 0),
            array(
                "id" => 1235,
                "nombre" => "Xbox",
                "precio" => 149.99,
                "cant" => 1,
                "iva_r" => 0),
            array(
                "id" => 1236,
                "nombre" => "Chocolate",
                "precio" => 6,
                "cant" => 5,
                "iva_r" => 1),
            array(
                "id" => 1237,
                "nombre" => "Samsung S29",
                "precio" => 859.95,
                "cant" => 1,
                "iva_r" => 0),
                array(
                "id" => 1238,
                "nombre" => "Airpods Pro 2027",
                "precio" => 199.99,
                "cant" => 2,
                "iva_r" => 0)
            );

        function subtotal($linea_pedido) {
            $subtotal_base = $linea_pedido['precio'] * $linea_pedido['cant'];
                
            if ($linea_pedido['iva_r'] == 1) {
                $subtotal_base += $subtotal_base * 0.10; // IVA reducido 10%
            } else {
                $subtotal_base += $subtotal_base * 0.21; // IVA normal 21%
            }
        
            return $subtotal_base;
}

        echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
        
        echo "<thead>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Cantidad</th>";
        echo "<th>IVA</th>";
        echo "<th>Subtotal</th>";
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
            foreach ($carrito as $producto) {
                 echo "<tr>";
                        echo "<td>" . $producto['id'] . "</td>";                   
                        echo "<td>" . $producto['nombre'] . "</td>";
                        echo "<td>" . $producto['precio'] . "</td>";
                        echo "<td>" . $producto['cant'] . "</td>";
                        echo "<td>" . $producto['iva_r'] . "</td>";
                        echo "<td>" . subtotal($producto). "</td>";
                echo "</tr>";
            }

            echo "<tr>";
                    echo "<td colspan='5' >" . "Total a pagar" . "</td>";
                    echo "<td colspan='1' >" . array_sum(array_map('subtotal', $carrito)) . "</td>";
            echo "</tr>";
                    
        echo "</tbody>";

        echo "</table>";
    ?>
    

</body>
</html>