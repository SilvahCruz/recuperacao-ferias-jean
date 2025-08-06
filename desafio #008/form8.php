<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>..</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form8.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
    $n = $_GET ['num'] ?? 0;
    $raizq = sqrt($n);
    $raizc = $n ** (1/3);
?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="./form8.php" method="get">
            <label for="num">Raiz Quadrada</label>
            <input type="number" name="num" id="sal" value="" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>   
        <h2>Resultado</h2>
        <?php 
            echo "A raiz quadrada do número $n é: $raizq<br><br>";
            echo "A raiz cúbica do número $n é: $raizc";
        ?>
    </section>
</body>
</html>