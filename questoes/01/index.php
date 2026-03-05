
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
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>

        <form method="get">
            <label>Digite um valor:</label>
            <input type="number" name="valor" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
            if (isset($_GET["valor"])) {
                $valor = $_GET["valor"];
                $antecessor = $valor - 1;

                echo "<p>O antecessor de $valor é $antecessor</p>";
            }
        ?>

    </main>

</body>

</html>
```
