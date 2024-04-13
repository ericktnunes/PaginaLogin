<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> l Página de login l</title>

    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    </head>
<body>

    
    
    <div id="principal">
        <div class="box">
            <form action="testlogin.php" method="POST">
                <h1>Login</h1>
                <hr>
                
                <!--Mensagem de error-->
                <?php 
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                 ?>

                <div class="inputs">
                    <h6>Seu email </h6>
                    <div class="email">
                        <input type="email" placeholder="contato@gmail.com" name="email" id="email" required>
                    </div>
                    <h6>Sua senha</h6>
                    <div class="senha">
                        <input type="password" placeholder="*********" name="senha" id="senha" required>
                    </div>
                </div>

                <!--Botao "Manter logado"-->
                <div class="manter_logado">
                    <input type="checkbox"> 
                    <h6>Manter-me logado</h6>
                </div>

                <!--Botao logar-->
                <div class="botao_submit" >
                    <button type="submit" name="submit" class="btn btn-primary">Logar</button>

                </div>

                <div class="cadastrar">
                    <div class="bloco_cadastrar">
                        <h6>Ainda não tem uma conta?</h6>
                        <a href="cadastro.php">Cadastre-se</a>
                    </div>
                </div>

            </form>
        </div>

        <!-- Modal -->
            <div class="modal fade" id="modalerro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
</div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>