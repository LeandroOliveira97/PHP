<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
 
<body>
    <?php 

       /* $lista_frutas = array('Banana', 'morango', 'Maça');

        $listaFrutas = ['a' => 'Banana', 'b' => 'Morango'];
 
        echo '<pre>';
        var_dump($listaFrutas);
        echo '</pre>';
        echo '<hr>';
        echo '<pre>';
        print_r($listaFrutas);
        echo '</pre>';
        

       // echo $lista_frutas[1];
       // echo $listaFrutas['b'];
        */
    ?> 

    <?php 

    $coisas = [];

    $coisas['frutas'] = [1 => 'Banana', 2 => 'Morango', 3 => 'Abacate'];

    $coisas['Pessoas'] = [1 => 'José', 2 => 'Ricardo', 3=> 'Gabriel'];

    echo '<pre>';
    print_r($coisas);
    echo '</pre> <hr>';

    echo $coisas['frutas'][3];
    echo '<br>';
    echo $coisas['Pessoas'][2];
    echo '<hr>';

    // //true ou false pra percorrer e encontrar no array
    // if(in_array('José', $coisas['Pessoas'])){
    //     echo 'Encontrado!';
    // } else {
    //     echo 'Não encontrado!';
    // }

    // Recupera o índice onde está armazanado o parametro, caso seja encontrado
    $posicao = array_search('Banana', $coisas['frutas']);

    
    if($posicao){
        echo  $coisas['frutas'][$posicao] . ' encontrado! Na posição: ' . $posicao . '.';
    } else {
        echo 'Não encontrado.';
    }

    ?> 

    
        
</body>
</html>