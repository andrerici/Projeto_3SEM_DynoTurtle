<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <title>DynoTurtle - Login</title>
</head>

<body>

    <!---------- Conteúdo ---------->
    <section>
        <div id="start">
            <div id="icon" alt="Ícone da empresa DynoTurtle"></div>
            <h1>Você está na DynoTurtle!</h1>
            <div>A sua loja de tecnologia</div>
        </div>

            <form action="index.php" method="post">
                <fieldset>
                    <legend>Fazer Login</legend>
                    <div id="enter">
                        <div>Usuário</div>
                        <input type="text" name="login" id="login">
                        <p><br>
                        <div>Senha</div>
                        <input type="password" name="senha" id="password">
                    </div>
                    <p><input type="submit" value="Entrar" id="sendbt">
                </fieldset>
    </section>
</body>


</html>

<?php
$usuario = "edsonprofessor@gmail.com";
$senha = "Uni9@connect"; 

if(isset($_POST["login"]) && isset($_POST["senha"])) {
    if($_POST["login"] === $usuario && $_POST["senha"] === $senha) {
        header("Location: home.php"); 
        exit(); 
    } else {
        echo "<div id=\"error\">Usuário e/ou senha incorreto(s), tente novamente</div>"; 
    }
}
?>
