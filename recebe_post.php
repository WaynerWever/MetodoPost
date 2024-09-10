<?php

    if (isset($_POST['nome']) && isset($_POST['idade'])){
        $nome = ($_POST['nome']);
        $idade = ($_POST['idade']);
        echo"<hr><h4>Nome: $nome<h4> <h5>Idade: $idade <h5><hr>";
    } 

    ?>