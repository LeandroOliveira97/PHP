<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <?php 

        define('Constante', 'Esta é uma variavel constante');
        $nome = 'Xablau';    
        $idade = 23;
        $peso = 57.7;
        $fumante = true;
    ?> 

    <h1>Ficha cadastra</h1>
    <br/>

    <p><?=  "Variavel: " . Constante ?></p>
    <p>Nome : <?=  $nome ?></p>
    <p>Idade : <?=  "$idade anos" ?></p>
    <p>Peso : <?=  $peso . ' kg'?></p>
    <p>Fumante : <?php echo ($fumante ? 'Fumante' : 'Não fumante')  ?></p>
                        
</body>
</html>