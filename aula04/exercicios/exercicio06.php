<?php

function gera_numeros(){
    $numero = [];

    for($i = 0; $i < 10; $i++){
        $numero[] = rand(1, 10);
    }
    return $numero;
}

$resultado = gera_numeros();

for($i = 0; $i < 10; $i++){
    echo $resultado[$i] . "<br>";
}

?>