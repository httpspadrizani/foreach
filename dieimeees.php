<?php

$a1 [0][0] = "Maria";
$a1 [0][1] = "35";
$a1 [0][2] = "Feminino";
$a1 [0][3] = "Casada";
$a1 [0][4] = "Advogada";

$a1 [1][0] = "Ana";
$a1 [1][1] = "36";
$a1 [1][2] = "Feminino";
$a1 [1][3] = "Casada";
$a1 [1][4] = "Personal";

$a1 [2][0] = "Marcos";
$a1 [2][1] = "38";
$a1 [2][2] = "Masculino";
$a1 [2][3] = "Casado";
$a1 [2][4] = "Pedagogo";

$a1 [3][0] = "Matheus";
$a1 [3][1] = "37";
$a1 [3][2] = "Masculino";
$a1 [3][3] = "Casado";
$a1 [3][4] = "Psicologo";

$a1 [4][0] = "Pedro";
$a1 [4][1] = "38";
$a1 [4][2] = "Masculino";
$a1 [4][3] = "Casado";
$a1 [4][4] = "Programacao";

$a1 [5][0] = "Leticia";
$a1 [5][1] = "37";
$a1 [5][2] = "Feminino";
$a1 [5][3] = "Divorciada";
$a1 [5][4] = "Agronoma";

$a1 [6][0] = "Marcela";
$a1 [6][1] = "36";
$a1 [6][2] = "Feminino";
$a1 [6][3] = "Solteira";
$a1 [6][4] = "Secretaria";

$a1 [7][0] = "Luiz";
$a1 [7][1] = "37";
$a1 [7][2] = "Masculino";
$a1 [7][3] = "Divorciado";
$a1 [7][4] = "Empresario";

$a1 [8][0] = "Alessandro";
$a1 [8][1] = "36";
$a1 [8][2] = "Masculino";
$a1 [8][3] = "Solteiro";
$a1 [8][4] = "Garcom";

$a1 [9][0] = "Emanuela";
$a1 [9][1] = "34";
$a1 [9][2] = "Feminino";
$a1 [9][3] = "Divorciada";
$a1 [9][4] = "Veterinaria";

foreach ($a1 as $valor) {
    foreach ($valor as $valor_1) {
        echo "$valor_1 <br/><hr/>";
    }
}