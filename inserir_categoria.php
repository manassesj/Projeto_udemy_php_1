<?php

    include 'conexao.php';

    $nome = $_POST['nomecategoria'];

    $sql = "INSERT INTO `categoria`( `nome`) VALUES ('$nome')";

    $inserir = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

<div class="container" style="width:500px; margin-top:20px">
    <center>>
        <h4>Categoria adicionado com sucesso!</h4>

        <div style="padding-top: 20px"></div>
        
        <center>
            <a href="adicionar_categoria.php" role="button" class="btn btn-primary">Cadastrar nova categoria</a>
        </center>
    </center>
</div>