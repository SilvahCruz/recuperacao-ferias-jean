<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>desafio #011</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form11.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    $preco = $_GET['preco'] ?? 0;
    $porc = $_GET['reajuste'] ?? 0;

    $formu = ($preco * $porc) /100;
    $result = $preco + $formu;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="./form11.php" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01">

            <label for="reaj">Qual será o percentual de reajuste?</label>
            <input type="number" name="reajuste" id="reaj" min="0.1" step="0.01">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>O produto que custava R$<?=$preco ?>, com <strong><?=$porc?>% de aumento</strong> vai passar a custar <strong>R$<?=$result?></strong> a partir de agora.</p>
    </section>
</body>

</html>