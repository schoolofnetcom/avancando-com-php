<?php

// echo $_GET['planeta'];
// echo "<br>";
// echo $_GET['cor'];

// ?planeta=Marte&cor=azul = Query String

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false) {
    echo $planeta;
} else {
    echo "Planeta não informado!";
}

// echo "<br>";

// $cor = $_GET['cor'] ?? "Cor não informada!";

// echo $cor;

//coalesce