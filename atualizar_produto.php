<?php

    include 'conexao.php';

    $id = $_POST['id'];
    $nomeproduto = $_POST['nomeproduto'];// Recebe o valor do atributo
    $categoria = $_POST['categoria'];// Recebe o valor do atributo
    $quantidade = $_POST['quantidade'];// Recebe o valor do atributo
    $fornecedor = $_POST['fornecedor'];// Recebe o valor do atributo

    $sql = "UPDATE `estoque` SET `nomeproduto`= '$nomeproduto',`categoria`= '$categoria',`quantidade`= $quantidade,`fornecedor`= '$fornecedor' 
                            WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

<div class="container" style="width:500px; margin-top:20px">
    <center>>
        <h4>Produto atualizado com sucesso!</h4>

        <div style="padding-top: 20px"></div>
        
        <center>
            <a href="listar_produtos.php" role="button" class="btn btn-primary">Voltar</a>
        </center>
    </center>
</div>
