<?php
    //cabecalho
    header("Content-Type: application/json; charset=UTF-8"); //DEFINE O TIPO DE RESPOSTA

    $metodo = $_SERVER['REQUEST_METHOD'];
    // echo "Metodo da requisição: " . $metodo

    // RECUPERA O ARQUIVO EXISTE
    $arquivo = 'usuario.json';

    // VERIFICA SE O ARQUIVO EXISTE, SE NÃO EXISTIR CRIA UM COM ARRAY VAZIO
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    // conteudo
    $usuarios = [
         ["id" =>1, "nome" => "Maria", "email" => "maria@gmail.com"],
         ["id" =>2, "nome" => "Joao", "email" => "joao@gmail.com"]
    ];

    switch($metodo){
        case 'GET' :
            // echo "AQUI AÇÕES DO METODO GET";
            echo json_encode($usuarios);
            break;
        case 'POST' :
            // echo "AQUI AÇÕES DO METODO POST";
            $dados = json_decode(file_get_contents('php://input'),true);
            // print_r($dados);
            $novo_usuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            array_push($usuarios, $novo_usuario);
            echo json_encode('Usuário inserido com sucessso!');
            print_r($usuarios);

            // Adiciona o novo usuário ao array existente
            // array_push($usuarios, $novoUsuario);
            // echo json_encode('Usuário inserido com sucesso!');
            // print_r($usuarios);

            break;
        case 'PUT' :
            echo "AQUI AÇÕES DO METODO PUT";
            break;
        case 'DELETE' :
            echo "AQUI AÇÕES DO METODO DELETE";
            break;
                    
        default:
            echo "MÉTODO NÃO ENCONTRADO!";
            break;       
    }

    // //converte para json e retorna
    // echo json_encode($usuarios);


?>