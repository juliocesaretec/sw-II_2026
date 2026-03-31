<?php
    //cria um array contando 3 empregados
    $empregados = array('empregados'=> array(
        array(
            'nome' => 'Jason Jones',
            'idade' => 38,
            'sexo' => 'M'
        ),
        array(
            'nome' => 'Ada Pascalina',
            'idade' => 35,
            'sexo' => 'F'
        ),
        array(
            'nome' => 'Delphino da Silva',
            'idade' => 26,
            'sexo' => 'M'
        )));

        //converte o conteudo do array para uma string JSON
        $json_str = json_encode($empregados);

        //imprime a string JSON
        echo "$json_str";

?>