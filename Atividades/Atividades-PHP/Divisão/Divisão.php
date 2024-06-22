<?php

function verificaDivisao($numero)
{
    if ($numero % 10 == 0) {
        echo "O número é divisível por 10.\n";
    } elseif ($numero % 5 == 0) {
        echo "O número é divisível por 5.\n";
    } elseif ($numero % 2 == 0) {
        echo "O número é divisível por 2.\n";
    } else {
        echo "O número não é divisível por 10, 5 ou 2.\n";
    }
}

$numeroEntrada = 99;

verificaDivisao($numeroEntrada);