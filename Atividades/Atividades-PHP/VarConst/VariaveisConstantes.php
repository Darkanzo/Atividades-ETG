<!DOCTYPE html>
<?php
$Nome = 'Maria Fernanda';
$Endereço = 'Rua Violeta, 3025';
$Cidade = 'Campinas';
$Estado = 'São Paulo';
$CEP = '13.536-459';
$Telefone = '(19) 8182-9977';
$Celular = '(19) 3854-3695';
define('RG', '28.569.569-X');
define('CPF', '123.653.659-98');
define('PIS', '8452368888');
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de Variáveis e Constantes</title>
</head>

<body>
    <h1>Valores</h1>
    <h2>Variavéis</h2>
    <p><?php echo $Nome ?></p>
    <p><?php echo $Endereço ?></p>
    <p><?php echo $Cidade ?></p>
    <p><?php echo $Estado ?></p>
    <p><?php echo $CEP ?></p>
    <p><?php echo $Telefone ?></p>
    <p><?php echo $Celular ?></p>
    <h2>Constantes</h2>
    <P><?php echo RG ?></p>
    <p><?php echo CPF ?></p>
    <p><?php echo PIS ?></p>


</body>

</html>