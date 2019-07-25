<?php

    include 'conexao.php';

    $nome = $_POST['nome'];

    $sql = "INSERT INTO `fornecedor` (`nome`) VALUES ('$nome')";

    $inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

<div class="container" style="width:500px; margin-top:20px">
    <center>>
        <h4>Fornecedor adicionado com sucesso!</h4>

        <div style="padding-top: 20px"></div>
        
        <center>
            <a href="adicionar_fornecedor.php" role="button" class="btn btn-primary">Cadastrar novo fornecedor</a>
        </center>
    </center>
</div>

