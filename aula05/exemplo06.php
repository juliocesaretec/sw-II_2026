<?php
    //cria o array associativo
    $idades = ["Jason"=>38,"Ada"=>35, "Delphin"=>26];

    //converte o conteudo do array para uma string JSON
    $json_str = json_encode($idade);

    //imprime a string JSON
    echo "$json_str";

?>