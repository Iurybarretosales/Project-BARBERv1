<?php 
    // ligando variaveis de conexao
    $hostname =  "localhost";
    $banco_de_dados  = "barbearia";
    $usuario = "root";
    $senha = "";

    //criando nova lista com as variaveis 
    $mysqli = new mysqli($hostname, $usuario, $senha, $banco_de_dados);


    if ($mysqli->connect_error) {
        echo "ERRO ao conectar ao BD";

    }
    else 
    {
        echo "<label>CADASTRADO COM SUCESSO!</label>";
    }
?>