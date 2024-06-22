<!DOCTYPE html>
<html lang="pt-br">

<?php

define("NOMECLIENTE", "Ahmed Abou Nasser Johk");
$endereco = 'Rua das Violetas, 320';
$bairro = 'Parque Estrela Dalva II';
$estado = 'GO';
$cep = '72820-020';
$idade = 16;
define("RG", "28290355-x");
$fone = '(61) 1109-2001';
?>
<html>

<head>
    <title>Trabalhando com Variáveis</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf8">
</head>

<body>
    <h1>Informações do Contato</h1>
    <p>Nome completo: <?php echo NOMECLIENTE; ?> </p>
    <p>Endereço: <?php echo $endereco; ?> </p>
    <p><?php echo "$bairro - $estado - CEP: $cep"; ?> </p>
    <p> Telefone: <?php echo $fone; ?></p>
    <h2>Documentos</h2>
    <?php echo "<p>Idade: $idade | RG: " . RG . "</p>"; ?>
</body>

</html>