<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>desafio 10</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form10.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        $atual = date("Y");
        $nasc = $_GET ['nascimento'] ?? '2000';
        $ano = $_GET ['anos'] ?? $atual;

        $idade = $ano - $nasc;
    ?>

    <main>
        <form action="form10.php" method="get">
            <label for="">Qual ano você nasceu?</label>
            <input type="number" name="nascimento" min="1900" value="<?=$nasc?>">
            <label for="">Quer saber sua idade em que ano?</label>
            <input type="number" name="anos" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        
        <h2>Resultado</h2>
        <p>Quem nasceu em  <?= $nasc ?>  vai ter <?= $idade ?> anos em <?= $atual ?>!</p>
    </section>
</body>
</html>