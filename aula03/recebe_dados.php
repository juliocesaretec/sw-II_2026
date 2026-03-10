<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>
    <?php
        //$nome = $_POST['nome'];
        //<img src=http://www.site_malicioso.com.br/foto1.jpg>
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $ano_atual = date("Y");
        $ano = $ano_atual - $idade;
        //echo $ano_atual;
    ?>
    <p>O nome é: <?php echo $nome; ?> </p>
    <p>O email é: <?php echo $email; ?> </p>
    <p>A idade é: <?php echo $idade; ?> </p>

    <p>Ahh então você nasceu em <?php echo $ano ?> </p>

    <?php 
        if ($idade >= 18) {
            echo "<p style = 'color:red;'> Vc é menor de idade </p>";
        } else {
            echo "<p style = 'color:blue;'> Vc é maior de idade </p>";
        }
        

    ?>

</body>
</html>