<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form.css">
    <title>Ant e Suc</title>
</head>

<body>
    <?php

    $numero = $_REQUEST ["num"] ?? 0;
    $a = $numero - 1;
    $s = $numero + 1;
    echo  "Seu número escolhido foi: $numero";
    echo  "<br>O seu antecessor é: $a";
    echo  "<br>O seu sucessor é: $s";
    ?>
</body>

</html>