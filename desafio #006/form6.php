<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form6.css'>
    <script src='main.js'></script>
</head>
<body>

<?php 
    $dividendo = $_GET ['d1'] ?? 0;
    $divisor = $_GET ['d2'] ?? 1;
?>
    <section>
        <div>
            <header>
                <h1>Anatomia de uma divisão</h1>
            </header>
        </div>
        <div class="formulario-size">
            <div class="formulario">
                <form action="./form6.php" method="get">
                    <label for="d1">Dividendo</label>
                    <input type="number" name="d1" id="d1" step="0.001" min="0" value="<?= $dividendo?>">
                    <label for="d2">Divisor</label>
                    <input type="number" name="d2" id="d2" step="0.001" min="1" value="<?= $divisor?>">
                    <input type="submit" value="Analisar" class="input-number">
                </form>
            </div>
        </div>
    </section>

    <section>
        <h2>Estrutura da Divisão</h2>
        
        <?php 
            // Cálculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;


            echo "<ul>";
                echo "<li>Dividendo: $dividendo</li>";
                echo "<li>Divisor: $divisor</li>";
                echo "<li>Quociente: $quociente</li>";
                echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>