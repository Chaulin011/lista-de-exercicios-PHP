<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

<header>
    <h2>Questão 05: Maior de Três Números</h2>
</header>

<main>

<form method="post">

    <label>Primeiro número:</label>
    <input type="number" name="n1" required>

    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="n2" required>

    <br><br>

    <label>Terceiro número:</label>
    <input type="number" name="n3" required>

    <br><br>

    <input type="submit" value="Verificar maior número">

</form>

<?php

if(isset($_POST["n1"], $_POST["n2"], $_POST["n3"])){

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    $maior = $n1;

    if($n2 > $maior){
        $maior = $n2;
    }

    if($n3 > $maior){
        $maior = $n3;
    }

    echo "<p>O maior número é: <strong>$maior</strong></p>";
}

?>

</main>

</body>

</html>