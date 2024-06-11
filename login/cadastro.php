<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO cad(email,senha)
    value('$email','$senha')";

    if(mysqli_query($mysqli, $sql)) {
        echo "deu certo";
    } else {
        echo "refaça".mysqli_connect_error($mysqli);
    };

?>