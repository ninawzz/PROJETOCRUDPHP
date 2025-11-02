<?php

    require_once "adminp/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

?>
<div class="container mt-3">
    <h2>Clientes atendidos pela Empresa</h2>
    <p>Detalhes dos nossos clientes por Cidade e Estado</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($cliente = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?=$cliente['produto']?></td>
            <td><?=$cliente['preco']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>