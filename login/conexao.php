<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sage";

    $mysqli = new mysqli($host, $usuario, $senha, $banco);

    if ($mysqli->error) {
        die("conexao falhou". $mysqli->error);
    }else{
        echo"Login efetuado com sucesso";
    };

?>