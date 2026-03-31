<?php

function somaArray($numero){
    $soma = 0;

    foreach($numero as $num){
        $soma += $num;
    }

    return $soma;
}

$array = [1, 2, 8, 4, 6];

echo somaArray($array);

?>