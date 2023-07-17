<!DOCTYPE html>
<html>
<head>
    <title>Encontrar o menor número</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    

    <?php
    function encontrarMenor($num1, $num2, $num3) {
        $menor = $num1;

        if ($num2 < $menor) {
            $menor = $num2;
        }

        if ($num3 < $menor) {
            $menor = $num3;
        }

        return $menor;
    }

    // Verifica se os números foram enviados via formulário
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
        $numero3 = $_POST['num3'];

        $menorNumero = encontrarMenor($numero1, $numero2, $numero3);
        

    }
    ?>
        <div class= "MenorNumero">
        <h1>Encontrar o menor número</h1>
        <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br>

        <input type="submit" value="Encontrar o menor número">
         </form>
         <div class="resultado-box">
    <?php
    if (isset($numero1, $numero2, $numero3, $menorNumero)) {
        echo "<p>O menor número é: $menorNumero</p>";
    }
    ?>
    </div>
        </div>
        
</body>
</html>
