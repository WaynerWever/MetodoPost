<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetodoPost</title>
</head>
<body>
    <h1>Envio de Formulário por Post</h1>
    
    <form action="recebe_post.php" method="post">
        <input name="nome" type="text" placeholder="Digite seu nome aqui:"> <br><br>
        <input name="idade" type="text" placeholder="Digite sua idade aqui"><br><br><hr>
        <button type="submit"> Enviar </button>
    </form>
    <?php

    if (isset($_POST['nome']) && isset($_POST['idade'])){
        $nome=($_POST['nome']);
        $idade=($_POST['idade']);
        echo"<h3>Nome: $nome <br> Idade: $idade <h3>";
    } 

    ?>
</body>
</html>