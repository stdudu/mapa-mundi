<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'jetpunk';
    $port = 3307;

    $con = mysqli_connect($hostname, $username, $password, $databse, $port);

    if(mysqli_connect_errno()){
        printf("Erro de conexão: %s", mysqli_connect_error());
        exit();
    }

?>