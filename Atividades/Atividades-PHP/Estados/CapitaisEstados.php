<?php

$estado = array(
    "RS" => "Porto Alegre",
    "SC" => "Florianópolis",
    "PR" => "Curitiba"
);

foreach ($estado as $sigla => $capital) {
    echo "A capital de $sigla é $capital.<br>";
}