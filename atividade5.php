<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área do Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área do Triângulo</h1>
        <form action="atividade5.php" method="post">
            <label for="base">Base do triângulo (cm):</label>
            <input type="number" id="base" name="base" step="0.01" required>

            <label for="altura">Altura do triângulo (cm):</label>
            <input type="number" id="altura" name="altura" step="0.01" required>

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = floatval($_POST['base']);
            $altura = floatval($_POST['altura']);
            $area = ($base * $altura) / 2;

            $limite = 100;

            if ($area > $limite) {
                $mensagem = "A área do triângulo é $area cm², que é maior que $limite cm².";
            } else {
                $mensagem = "A área do triângulo é $area cm², que é menor ou igual a $limite cm².";
            }

            echo "<p>$mensagem</p>";
        }
        ?>
    </div>
</body>
</html>