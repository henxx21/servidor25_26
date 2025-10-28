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

    <?php

        $libros = array(
            array(
                "ISBN" => "978-84-985-128-0",
                "titulo" => "EL LIBRO OFICIAL DE LA COPA MUNDIAL DE LA FIFA",
                "descripcion" => "Este libro es una recomendación digital para todos los amantes de la lectura que buscan una vida tranquila, terrenal, plena y feliz",
                "categoria" => "Deporte",
                "editorial" => "MAGAZZINI SALANI",
                "foto" => "img/978-84-985-128-0.png",
                "precio" => 12.99,
            ),  
            array(
                "ISBN" => "978-84-985-129-1",   
                "titulo" => "LEBRON LA HISTORIA DE UN REY",
                "descripcion" => "La historia de LeBron James, la leyenda",
                "categoria" => "Deporte",
                "editorial" => "DUOMO EDICIONES",
                "foto" => "img/978-84-985-129-1.jpg",
                "precio" => 15.99,
            ),
            array(
                "ISBN" => "978-84-985-130-2",
                "titulo" => "¡JODER, COMO DUELE!",
                "descripcion" => "Transforma tu relación con el dolor y recupera el control de tu vida.",
                "categoria" => "Deportes",
                "editorial" => "DUOMO EDICIONES",
                "foto" => "img/978-84-985-130-2.png",
                "precio" => 14.99,
            ),
            array(
                "ISBN" => "978-84-985-131-3",
                "titulo" => "CÓMO GANAR AL AJEDREZ",
                "descripcion" => "Aprende a jugar al ajedrez de la mano de Levy Rozman (aka GothamChess), el Maestro Internacional reconocido por la FIDE",
                "categoria" => "Deportes",
                "editorial" => "ARPA Y ALFIL EDITORES S.L.",
                "foto" => "img/978-84-985-132-3.png",
                "precio" => 9.99,
            ),
            array(
                "ISBN" => "978-84-985-132-4",                
                "titulo" => "REGLAS DE JORDAN, LAS",
                "descripcion" => "En la temporada de 1990-1991, el célebre periodista Sam Smith tuvo un acceso privilegiado al interior de la franquicia de los Chicago Bulls y su estrella, Michael Jordan. <br><br>",
                "categoria" => "Deportes",
                "editorial" => "CONTRA",                
                "foto" => "img/978-84-985-132-4.png",
                "precio" => 11.99,
            ),
            array(
                "ISBN" => "978-84-985-132-5",                
                "titulo" => "EL ARBOL DE LA VIDA",
                "descripcion" => "Una fascinante exploración del árbol genealógico de la vida que revela cómo todos los seres del planeta estamnos más unidos de lo que pensamos. El mayor enigma de la ciencia <br><br>",
                "categoria" => "Ciencias",
                "editorial" => "GeoPlaneta",                
                "foto" => "img/978-84-985-132-5.png",
                "precio" => 4.99,
            ),
            array(
                "ISBN" => "978-84-985-132-6",                
                "titulo" => "LA ERA DEL DIAGNOSTICO BY SUZANNE O'SULLIVAN",
                "descripcion" => "Cómo la obsesión médica por etiquetar nos está enfermando a todos. La autora de TODO ESTA EN TU CABEZA  ",
                "categoria" => "Ciencias",
                "editorial" => "Editorial Ariel",                
                "foto" => "img/978-84-985-132-6.png",
                "precio" => 6.99,
            ),
            array(
                "ISBN" => "978-84-985-132-7",                
                "titulo" => "LOS NUMEROS NOS HICIERON COMO SOMOS",
                "descripcion" => "El desconocido y apasionante papel transformador de los números en la humanidad. <br> <br> <br> <br> ",
                "categoria" => "Ciencias",
                "editorial" => "Editorial Crítica",                
                "foto" => "img/978-84-985-132-7.png",
                "precio" => 5.99,
            ),
            array(
                "ISBN" => "978-84-985-132-8",                
                "titulo" => "CALOR Y HAMBRE",
                "descripcion" => "Fred Vargas hace un llamamiento para que cambiemos el rumbo que nos lleva hacia la destrucción del planeta <br><br>",
                "categoria" => "Ciencias",
                "editorial" => "SIRUELA",                
                "foto" => "img/978-84-985-132-8.png",
                "precio" => 5.99,
            ),
            array(
                "ISBN" => "978-84-985-132-9",                
                "titulo" => "ANTIMATERIA",
                "descripcion" => "Un libro sobre la sustancia que nos aniquila y nos explica: la antimateria, misterio luminoso que guarda la clave de lo que somos",
                "categoria" => "Ciencias",
                "editorial" => "SEXTO PISO EDITORIAL",                
                "foto" => "img/978-84-985-132-9.png",
                "precio" => 8.99,
            ),
            array(
                "ISBN" => "978-84-985-132-10",                
                "titulo" => "EN LA MENTE NAZI",
                "descripcion" => "Una innovadora historia que desentraña las motivaciones y mentalidades que subyacen tras los nazis y sus partidarios.",
                "categoria" => "Historia",
                "editorial" => "Editorial Crítica",                
                "foto" => "img/978-84-985-132-10.png",
                "precio" => 9.99,
            ),
            array(
                "ISBN" => "978-84-985-132-11",                
                "titulo" => "GUÍA DE VIAJES POR LA EDAD MEDIA",
                "descripcion" => "Este libro es una recomendación para todos los que buscan una vida plena y feliz.",
                "categoria" => "Historia",
                "editorial" => "Atico de los Libros",                
                "foto" => "img/978-84-985-132-11.png",
                "precio" => 9.99,
            ),
            array(
                "ISBN" => "978-84-985-132-12",                
                "titulo" => "PALESTINA. LA EXISTENCIA NEGADA",
                "descripcion" => "Este libro es una recomendación para todos los que buscan una vida plena y feliz.",
                "categoria" => "Historia",
                "editorial" => "Ediciones del Oriente y del Mediterráneo ",                
                "foto" => "img/978-84-985-132-12.png",
                "precio" => 9.99,
            ),
            array(
                "ISBN" => "978-84-985-132-13",                
                "titulo" => "MI LUCHA",
                "descripcion" => "Este libro es una recomendación para todos los que buscan una vida plena y feliz.<br><br><br><br><br>",
                "categoria" => "Historia",
                "editorial" => "Editorial Verbum, S.L.",                
                "foto" => "img/978-84-985-132-13.png",
                "precio" => 14.99,
            ),
            array(
                "ISBN" => "978-84-985-132-14",                
                "titulo" => "CAPITÁN VENENO",
                "descripcion" => "Aguilera Munro fue un personaje atroz, extravagante y excesivo incluso para los cánones del fascismo en boga en la década de los treinta del siglo pasado.",
                "categoria" => "Historia",
                "editorial" => "LIBROS DEL KO, SLL",                
                "foto" => "img/978-84-985-132-14.png",
                "precio" => 14.99,
            ),
            array(
                "ISBN" => "978-84-985-132-15",                
                "titulo" => "PLATÓN CONTRA LAS MÁQUINAS",
                "descripcion" => "LA TECNOLOGÍA Y SUS ENEMIGOS, DESDE LA ESCRITURA HASTA LA INTELIGENCIA ARTIFICIAL <br><br>",
                "categoria" => "Actualidad",
                "editorial" => "ALIANZA EDITORIAL",                
                "foto" => "img/978-84-985-132-15.png",
                "precio" => 5.99,
            ),
            array(
                "ISBN" => "978-84-985-132-16",                
                "titulo" => "AMOR PROGRAMADO",
                "descripcion" => "El doctor en Inteligencia Artificial Raúl Arrabales nos revela en estas páginas cómo la neurociencia, la psicología y la IA pueden ayudarnos a entender lo que nos hace humanos.",
                "categoria" => "Actualidad",
                "editorial" => "LA ESFERA DE LOS LIBROS",                
                "foto" => "img/978-84-985-132-16.png",
                "precio" => 8.99,
            )
        );


        foreach($libros as $libro) {
            echo "<div class='card' style='width: 15rem; display: inline-block; margin: 10px;'>";
            echo "<img src='" . $libro['foto'] . "' class='card-img-top' alt='" . $libro['titulo'] . "'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $libro['titulo'] . "</h5>";
            echo "<p class='card-text'>" . $libro['descripcion'] . "</p>";
            echo "<p class='card-text'><strong>Precio: $" . number_format($libro['precio'], 2) . "</strong></p>";
            echo "</div>";
            echo "</div>";
        }





        
    ?>
    





    
</body>
</html>
