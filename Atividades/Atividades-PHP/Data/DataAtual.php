<!DOCTYPE html>
<html>

<head>
    <title>Data e Hora Atual</title>
</head>

<body>
    <h1>Data e Hora Atual</h1>
    <?php

    date_default_timezone_set('America/Sao_Paulo');

    $dataHoraAtual = date('d/m/Y H:i:s');

    echo "<p>Data e Hora Atual: $dataHoraAtual</p>";
    ?>
</body>

</html>