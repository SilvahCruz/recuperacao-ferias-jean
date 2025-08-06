<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form7.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
    $minimo = 1518;
    $salario = $_GET ['sal'] ?? 0;
?>


    <main>
        <h1>Informe seu salário</h1>
        <form action="./form7.php" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <strong><p>Considerando o salário de R$ <?=number_format($minimo, 2, ",", ".") ?></p></strong>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>   
        <h2>Resultado</h2>
        <?php 
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "ganha $tot salários mínimos. <br> a diferença é $dif"
        ?>
    </section>
</body>
</html>
