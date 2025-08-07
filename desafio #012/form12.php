<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>desafio #012</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./form12.css'>
    <script src='main.js'></script>
</head>
    <?php 
        $valor = $_GET['seg'] ?? 0;
        $sobra = $valor;

        //convertendo em semanas
        $sem = (int)($valor / 604_800);
        $sobra = $sobra % 604.800;

        //convertendo em dias
        $dias = (int)($valor / 84_400);
        $sobra = $sobra % 84.400;

        //convertendo em horas
        $horas = (int)($valor / 3_600);
        $sobra = $sobra % 3.600;

        //convertendo em minutos
        $min = (int)($valor / 60);
        $sobra = $sobra % 60;

        //convertendo em segundos
        $segundo = $sobra;

    ?>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <?=$valor?> segundos equivalem a um total de:</p>
        <ul>
            <li><?=$sem?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>

</html>