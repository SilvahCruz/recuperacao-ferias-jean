<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim =  date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cot = $dados["value"][0]["cotacaoCompra"];

    $real = $_REQUEST["num"] ?? 0;

    $dolar = $real / $cot;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " Equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

    ?>
</body>

</html>