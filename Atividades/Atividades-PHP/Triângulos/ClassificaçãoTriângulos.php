<?php

$lado1 = 10;
$lado2 = 4.5;
$lado3 = 9;

function Triangulo($a, $b, $c)
{
    return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}

function classificaTriangulo($a, $b, $c)
{
    if ($a == $b && $b == $c) {
        return "Equilátero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "Isósceles";
    } else {
        return "Escaleno";
    }
}

if (Triangulo($lado1, $lado2, $lado3)) {

    $classificacao = classificaTriangulo($lado1, $lado2, $lado3);
    echo "Os lados formam um triângulo $classificacao.\n";
} else {
    echo "Os lados fornecidos não formam um triângulo.\n";
}