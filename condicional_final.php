<?php

$media = 7;
$media_recuperacao = 5;
$frequencia = 70;

$media_aluno = 10;
$frequencia_aluno = 80;

$reprovado_por_faltas = $frequencia_aluno < $frequencia ? true : false;

if (!$reprovado_por_faltas) {

    if ($media_aluno < $media_recuperacao) {
        echo "Reprovado!";
    } else if ($media_aluno < $media) {
        echo "Recuperação!";
    } else {
        echo "Aprovado!";
    }

} else {
    echo "Reprovado por faltas!";
}