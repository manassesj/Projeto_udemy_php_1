<?php

    include 'conexao.php';

    $nroproduto = $_POST['nroproduto']; // Recebe o valor do atributo
    $nomeproduto = $_POST['nomeproduto'];// Recebe o valor do atributo
    $categoria = $_POST['categoria'];// Recebe o valor do atributo
    $quantidade = $_POST['quantidade'];// Recebe o valor do atributo
    $fornecedor = $_POST['fornecedor'];// Recebe o valor do atributo

    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
                    VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

    $inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

<div class="container" style="width:500px; margin-top:20px">
    <center>>
        <h4>Produto adicionado com sucesso!</h4>

        <div style="padding-top: 20px"></div>
        
        <center>
            <a href="adicionar_produto.php" role="button" class="btn btn-primary">Cadastrar novo item</a>
        </center>
    </center>
</div>