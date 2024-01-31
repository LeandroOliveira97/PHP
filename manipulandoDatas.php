<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP manipulação datas</title>
</head>
<body>
    
    <?php 
    
    /*
    echo date('d/m/Y H:i');
    
    echo '</br>';

    echo date_default_timezone_get();


    date_default_timezone_set('America/Sao_Paulo');

    echo '</br>';

    echo date_default_timezone_get();

    echo '</br>';
    echo '</br>';

    echo date('d/m/Y H:i');*/

    $inicial = '2018-04-24';
    date_default_timezone_set('America/Sao_Paulo');
    $final = date('Y-m-d');

    echo "Data inicial: " . $inicial;
    echo '</br>';
    echo "Data Atual: " . $final;

    $time_inicial = strtotime($inicial);
    $time_final = strtotime($final);

    $dif_times = $time_final - $time_inicial;

    echo "</br>A diferença entre " . $inicial . " e " . $final . " é de " . ($dif_times / 86400) . " dias.";



    ?>
</body>
</html>