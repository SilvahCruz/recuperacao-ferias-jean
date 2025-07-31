<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
</head>
<body>
    
<?php 

    $num = $_POST ["n"] ?? 0;

    echo "analisando o número <strong>" .  number_format($num, 3, ",", ".") ."</strong> informado: ";

    $int = (int)$num;
    $fra = (float)$num;

    echo "<br>A parte inteira do número é: <strong>$int</strong>";
    echo "<br>A parte decimal do número é: <strong>$fra</strong>";
?>

</body>
</html>
