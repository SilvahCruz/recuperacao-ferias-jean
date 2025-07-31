<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $cot = 5.59;

    $real = $_REQUEST ["num"] ?? 0;

    $dolar = $real / $cot;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrao, $real , "BRL") . " Equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

    ?>
</body>
</html>