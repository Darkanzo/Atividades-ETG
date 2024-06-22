<?php

$curso = [
    "nome" => "PHP",
    "data" => "21/06/2024",
    "carga_horaria" => "40 horas",
    "local" => "ETG"
];

foreach ($curso as $indice => $valor) {
    echo ucfirst($indice) . ": " . $valor . "<br>";
}