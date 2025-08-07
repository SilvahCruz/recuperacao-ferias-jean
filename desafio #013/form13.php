<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>desafio #013</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form13.css'>
    <script src='main.js'></script>
</head>
<?php 
    $saque = $_GET ['saque'] ?? 0;
    $resto = $saque;

    //notas de 100
    $tot100 = floor($resto / 100);
    $resto = $resto % 100;

    //notas de 50
    $tot50 = floor($resto / 50);
    $resto = $resto % 50;

    //notas de 10
    $tot10 = floor($resto / 10);
    $resto = $resto % 10;

    //notas de 5
    $tot5 = floor($resto / 5);
    $resto = $resto % 5;
?>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="./form13.php" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)
                <sup>*</sup>
            </label>
            <input type="number" name="saque" id="saque" step="5" required>

            <p style="font-size: 0.65em">
                <sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5
            </p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=$saque?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>100 x <?=$tot100?></li>
            <li>50 x <?=$tot50?></li>
            <li>10 x <?=$tot10?></li>
            <li>5 x <?=$tot5?></li>
        </ul>
    </section>
</body>

</html>