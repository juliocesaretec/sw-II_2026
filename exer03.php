<?php

    $json = file_get_contents("produtos.json");

    $produtos = json_encode(json, true);

    $novo = array(
        "nome" => "iphone",
        "preco" => 4000,
        "quantidade" => 3
    );

    $produtos[] = $novo;

    $json = json_encode($produtos, JSON_PRETTY_PRINT);

    file_put_contents("produtos.json", $json);

    echo "Novo produto adicionado"

?>