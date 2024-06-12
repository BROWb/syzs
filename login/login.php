<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <form action="cadastro.php" method="POST">
    <h1 style="margin-top: -20px; color:black;">Acessar conta</h1><P>
            <label>Nome</label>
            <input type="nome" name="nome">
    <P>
            <label>email</label>
            <input type="email" name="email">
        </P>
        <p>
            <label>senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">entrar</button>
        </p>
    </form>

    <style>
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
</body>
</html>