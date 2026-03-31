<?php
    $produtos = array(

    array("nome" => "iphone", "preço" => 4000, "Quantidade" => 3),
    array("nome" => "onix", "preço" => 3000, "Quantidade" => 4),
    array("nome" => "relogio", "preço" => 20, "Quantidade" => 10),
 );

$json = json_encode($produtos, JSON_PRETTY_PRINT);

file_put_contents("produtos.json", $json);

echo "Arquivo produtos.json criado";

?>