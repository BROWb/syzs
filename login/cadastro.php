<form>
<?php
    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro(nome,email,senha)
    value('$nome','$email','$senha')";

    if(mysqli_query($mysqli, $sql)) {
        echo " ";
    } else {
        echo "refaça".mysqli_connect_error($mysqli);
    };
 
?>
<button><a href="../index.php">Voltar</a></button>
</form>
<style>
    button{
        background-color: black;
    }
 body{
  background-color: white;
   
    text-align: center;
}
label{
    color: black;
}
form{
    position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 70px;
            border-radius: 50px; 
            color: rgb(180, 103, 253);
            background-color: rgb(57, 84, 194);
            text-align: center;
            height: 20%;
}
a{
  color: white;
}
</style>