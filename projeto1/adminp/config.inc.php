<?php

    $conexao = mysqli_connect("localhost", "root", "");

    $bd = mysqli_select_db($conexao, "projeto1");

    if(!$conexao){
        echo "Conexão com baco de dados falho!";
    }