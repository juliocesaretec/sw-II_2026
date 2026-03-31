<?php

    //string json (arrray contendo 3 elemntos)
    $json_str = '
        {"empregados":
            [
                {"nome":"jason Jones", "idade":38, "sexo": "M"},
                {"nome":"ada Pascalina", "idade":35, "sexo": "F"},
                {"nome":"Delpino da silva", "idade":26, "sexo": "M"}
            ]
        }';

    //faz o parsing da string, criando o array "empregados"
    $jsonObj = json_decode($json_str);
    echo "<pre>";
    var_dump($jsonObj);
    echo "<pre>";


    echo "<hr>";
    $empregados = $jsonObj->empregados;


    echo "<hr>";
    //navega pelos elementos do array, imprimindo cada empreagado
    foreach ($empregados as $e) {
        echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";  
    }
    
?>