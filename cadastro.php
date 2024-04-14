<?php
    if(isset($_POST['submit']))
    {    


    include_once("conexao.php");
    session_start();
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhacrip = md5($senha);

        


         //Mensagem de cadastro já existe
        $sql = "SELECT * FROM railway.usuarios WHERE email = '$email'";
        $result = $conexao->query($sql);


        if(mysqli_num_rows($result) < 1) 
        {
            $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senhacrip')");
            $_SESSION['msg'] = "<p style = 'color:green; margin-left: 15px;'>Cadastro realizado com sucesso</p>";
        } else { 
            unset($_SESSION['email']);
            unset($_SESSION['senha']); 
            unset($_SESSION['cpf']);
            unset($_SESSION['nome']); 
            $_SESSION['msg'] = "<p style = 'color:red; margin-left: 15px;'>Já existe um login com esse email</p>";
        }

    };

    

   

   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> l Página de cadastro l</title>
    
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div id="principal">
        <div class="box">
            <form action="cadastro.php" method="POST">
                <h1>Cadastro</h1>
                <hr>

                <?php
                    if(isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }

                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        header("Location: cadastro.php");
                    }

                ?>

                <div class="inputs">
                    <h6>Nome completo</h6>
                    <div class="nome">
                        <input type="text" placeholder="Seu nome..." name="nome" id="nome" required>
                    </div>

                    <h6>Seu CPF</h6>
                    <div class="cpf">
                        <input type="text" placeholder="XXX.XXX.XXX-XX" name="cpf" id="cpf" maxlength="11" pattern="\d{3}\.?\d{3}\.?\d{3}\-?\d{2}" required>
                    </div>

                    <h6>Seu email </h6>
                    <div class="email">
                        <input type="email" placeholder="contato@gmail.com" name="email" id="email" required>
                    </div>

                    <h6>Sua senha</h6>
                    <div class="senha">
                        <input type="password" placeholder="*********" name="senha" id="senha" required>
                    </div>
                </div>

                <!--Botao criar-->
                <div class="botao_submit" >
                    <button name ="submit" type="submit" class="btn btn-primary">Criar conta</button>
                </div>

                <div class="cadastrar">
                    <div class="bloco_cadastrar">
                        <h6>Já tem uma conta?</h6>
                        <a href="login.php">Logar-se</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>