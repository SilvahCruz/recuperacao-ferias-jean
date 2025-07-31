<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
</head>

<body>
    <?php

    $min = 0;
    $max = 100;

    $s = mt_rand($min, $max);

    echo "O número aleatório entre 0 e 100 escolhido foi: $s...";
    echo ""
    ?>
</body>

</html>