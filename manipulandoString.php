<html>

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <?php
    $text = "hello World!!";

    echo "Texto Padrão: " . $text;
    echo "</br></br>";
    

    echo "Texto utilizando upper: " . strtoupper($text);
    echo "</br>";

    echo "Texto utilizando lower: " . strtolower($text);
    echo "</br>";

    echo "Contando qtde caracteres: " . strlen($text);
    echo "</br>";

    echo "Primeiro Caracter Maiúsculo: " . ucfirst($text);
    echo "</br>";

    echo "Replace: " . str_replace("l", "f", $text);
    echo "</br>";

    echo 'Recorte de String: Original "Vamos remover" após cortar: '  . substr("Vamos remover", 0, 5);
    echo "</br>";
    echo 'Recorte Texto Padrão. Antes: ' . $text . ' Após: ' . substr($text, 0 , 5);

    ?>


</body>

</html>