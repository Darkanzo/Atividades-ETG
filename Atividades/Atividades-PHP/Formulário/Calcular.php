<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
</head>

<body>
    <h1>Resultado do Cálculo do Retângulo</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largura = $_POST["largura"];
        $altura = $_POST["altura"];

        if (is_numeric($largura) && is_numeric($altura)) {
            $largura = floatval($largura);
            $altura = floatval($altura);

            $area = $largura * $altura;
            $perimetro = 2 * ($largura + $altura);

            echo "<p>A área do retângulo é: " . $area . " unidades quadradas.</p>";
            echo "<p>O perímetro do retângulo é: " . $perimetro . " unidades.</p>";
        } else {
            echo "<p>Por favor, insira valores numéricos válidos para a largura e a altura.</p>";
        }
    } else {
        echo "<p>Método de requisição inválido.</p>";
    }
    ?>
</body>

</html>