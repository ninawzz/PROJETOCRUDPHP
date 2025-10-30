<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['produto'];
    $preco = $_POST['preco'];

    $sql = "UPDATE clientes SET
            produto = '$produto',
            preco = '$preco',
            WHERE id = '$id'"

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Cadastro Alterado com sucesso!";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }
    