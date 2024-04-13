<?php
    session_start();

    if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha'] ))  == true)
    {   
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");
    }

    $logado = $_SESSION['email'];

    if (isset($_POST['submit'])) {
        header("Location: login.php");
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ACESSOU O SISTEMA</h1>
    <h1>Bem vindo <?php print_r($logado); ?></h1>

    <form action="sistema.php" method = "POST">
        <button type = "submit" name = "submit">sair</button>
    </form>
</body>
</html>