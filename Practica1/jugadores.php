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

<div class="col-md-10 themed-grid-col">
    <div class="flex-shrink-0 p-3 bg-white">

        <div class="container text-center">
            <div class="row">

<?php

$pokemons = array(

    "pokemon1" => array(
        "nombre" => "Bulbasaur",
        "peso" => 6.9,
        "url" => 'img/pokemons/Bulbasaur.webp',
        "descripcion" => "Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación.",
        "habilidades" => array("Espesura", "Ataques de tipo Planta", "Su habilidad oculta es Clorofila")
    ),

    "pokemon2" => array(
        "nombre" => "Ivysaur",
        "peso" => 13.0,
        "url" => 'img/pokemons/Ivysaur.webp',
        "descripcion" => "Su nombre proviene de las palabras en inglés ivy (hiedra) y saur, traducción al inglés de la palabra griega saûros (reptil o lagarto).",
        "habilidades" => array("Crecimiento excesivo", "Convierte la luz del sol en energía", "Su habilidad oculta es Clorofila")
    ),

    "pokemon3" => array(
        "nombre" => "Venusaur",
        "peso" => 100.0,
        "url" => 'img/pokemons/Venusaur.webp',
        "descripcion" => "Venusaur es la evolución final de Bulbasaur y la evolución de nivel 32 de Ivysaur.",
        "habilidades" => array("Fuerza bruta", "Ataques de tipo Planta y Veneno", "Su habilidad oculta es Clorofila")
    ),

    "pokemon4" => array(
        "nombre" => "Charmander",
        "peso" => 8.5,
        "url" => 'img/pokemons/Charmander.webp',
        "descripcion" => "Charmander es un Pokémon de tipo fuego introducido en la primera generación.",
        "habilidades" => array("Mar Llamas", "Ataques de tipo Fuego", "Su habilidad oculta es Poder Solar")
    ),

    "pokemon5" => array(
        "nombre" => "Charmeleon",
        "peso" => 19.0,
        "url" => 'img/pokemons/Charmeleon.webp',
        "descripcion" => "Charmeleon es la evolución de nivel 16 de Charmander y la preevolución de nivel 36 de Charizard.",
        "habilidades" => array("Mar Llamas", "Ataques de tipo Fuego", "Su habilidad oculta es Poder Solar")
    ),

    "pokemon6" => array(
        "nombre" => "Charizard",
        "peso" => 90.5,
        "url" => 'img/pokemons/Charizard.webp',
        "descripcion" => "Charizard es la evolución final de Charmander y la evolución de nivel 36 de Charmeleon.",
        "habilidades" => array("Mar Llamas", "Ataques de tipo Fuego y Volador", "Su habilidad oculta es Poder Solar")
    ), 

    "pokemon7" => array(
        "nombre" => "Squirtle",
        "peso" => 9.0,
        "url" => 'img/pokemons/Squirtle.webp',
        "descripcion" => "Squirtle es un Pokémon de tipo agua introducido en la primera generación.",
        "habilidades" => array("Torrente", "Ataques de tipo Agua", "Su habilidad oculta es Cuerpo Llama")
    ),

    "pokemon8" => array(
        "nombre" => "Wartortle",
        "peso" => 22.5,
        "url" => 'img/pokemons/Wartortle.webp',
        "descripcion" => "Wartortle es la evolución de nivel 16 de Squirtle y la preevolución de nivel 36 de Blastoise.",
        "habilidades" => array("Torrente", "Ataques de tipo Agua", "Su habilidad oculta es Cuerpo Llama")
    ),

    "pokemon9" => array(
        "nombre" => "Blastoise",
        "peso" => 85.5,
        "url" => 'img/pokemons/Blastoise.webp',
        "descripcion" => "Blastoise es la evolución final de Squirtle y la evolución de nivel 36 de Wartortle.",
        "habilidades" => array("Torrente", "Ataques de tipo Agua", "Su habilidad oculta es Cuerpo Llama")
    ),

    "pokemon10" => array(
        "nombre" => "Pikachu",
        "peso" => 6.0,
        "url" => 'img/pokemons/Pikachu.webp',
        "descripcion" => "Pikachu es un Pokémon de tipo eléctrico introducido en la primera generación.",
        "habilidades" => array("Electricidad estática", "Ataques de tipo Eléctrico", "Su habilidad oculta es Pararrayos")
    ),

    "pokemon11" => array(
        "nombre" => "Raichu",
        "peso" => 30.0,
        "url" => 'img/pokemons/Raichu.webp',
        "descripcion" => "Raichu es la evolución de nivel 22 de Pikachu.",
        "habilidades" => array("Electricidad estática", "Ataques de tipo Eléctrico", "Su habilidad oculta es Pararrayos")
    ),

    "pokemon12" => array(
        "nombre" => "Sandshrew",
        "peso" => 12.0,
        "url" => 'img/pokemons/Sandshrew.webp',
        "descripcion" => "Sandshrew es un Pokémon de tipo tierra introducido en la primera generación.",
        "habilidades" => array("Fuga", "Ataques de tipo Tierra", "Su habilidad oculta es Sequía")
    )

);


foreach ($pokemons as $clave => $valor) {
    echo '<div class="col" style="padding:2rem;" >';
    echo "<h4>" . $valor["nombre"];
    echo " - " . $valor["peso"] . " kg</h4>";
    echo "<img src='" . $valor["url"] . "' width='200'>";
    echo "<ul class='list-group'>";
    foreach ($valor["habilidades"] as $habilidad) {
        echo "<li class='list-group-item'>" . $habilidad . "</li>";
    }
    echo "</ul>";
    echo '</div>';
}


?>


    
</body>
</html>