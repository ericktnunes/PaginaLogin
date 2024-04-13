<?php
    $dbhost = 'DOMINIO.COM';
    $dbPort = PORT;
    $dbUsername = 'USUARIO';
    $dbPassword = 'PASSWORD';
    $dbName = 'DATABASE';


    $conexao = new mysqli ($dbhost, $dbUsername, $dbPassword, $dbName, $dbPort);


    /*
    if ($conexao->connect_errno){
        echo 'Erro';
    } else {
        echo 'conexão efetuada com sucesso';
    } */

?>
