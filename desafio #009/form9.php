<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>desafio 9</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form9.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 

    $valor1 = $_GET ['v1'] ?? '';
    $peso1 = $_GET ['p1']  ?? '';
    $valor2 = $_GET ['v2'] ?? '';
    $peso2 = $_GET ['p2']  ?? '';

?>
<main>
    <h1>Médias Aritméticas</h1>
    <form action="./form9.php" method="get">
        <label for="v1">1º Valor</label>
        <input type="number" name="v1" id="v1" required value="<?=$valor1?>">;
    
        <label for="p1">1º Peso</label>
        <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">;
    
        <label for="v2">2º Valor</label>
        <input type="number" name="v2" id="v2" required value="<?=$valor2?>">;
    
        <label for="p2">2º Peso</label>
        <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">; 
    
        <input type="submit" value="Calcular Médias">
    </form>
</main>

    <section>
    <?php 
        $ma = ($valor1 + $valor2) / 2;
        $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 / $peso2);
    ?>
    <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
        <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$ma?>.</li>
        <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?$peso2?> é igual a <?=$mp?>.</li>
        </ul>
    </section>
</body>
</html>