<?php

/*$contador = 0;
while ($contador <= 10) {
    $contador = $contador + 1;

    if ($contador % 2 != 0) {
        continue;
    }

    echo $contador . "<br>";

    // if ($contador == 3) {
    //     break;
    // }
}*/

$numero = 6;
$contador = 1;

while ($contador <= 10) {
    echo $contador . " x " . $numero . " = " . ($contador * $numero) . "<br>";
    $contador++;
}