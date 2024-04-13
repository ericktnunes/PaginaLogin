<?php

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include("conexao.php");
        session_start();

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $resultado = $conexao->query($sql);

        
        if(mysqli_num_rows($resultado) < 1)
        {   
            unset($_SESSION['email']);
            unset($_SESSION['senha']);    
            $_SESSION['msg'] = "<p style = 'color:red; margin-left: 15px;'> Usuário não existe, email ou senha está incorreta </p>";
            header("Location: login.php");
        }
        else 
        {   
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header("Location: sistema.php");
        }
    
    }
    else 
    {
        header("Location: login.php");
    } 