<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Formulário de cadastro </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style type="text/css">
            #tamanhoContainer {
                width: 500px;
            }

            #botao{
                background-color: #FF1168; cor de fundo
                color: white; cor da letra
                font:bold;
            }

        </style>

    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 50px">
            <div style="text-align: right">
                <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
            </div>

            <h4>Formulario de cadastro</h4>
            
            <form  action="inserir_produto.php" method="post" style="margin-top: 20px">
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" placeholder="insira o numero do produto" required>

                </div>

                <div class="form-group">
                    <label>Nome do produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto" required>

                </div>

                <div class="form-group">
                    <label>Categoria</label> 
                    <select class="form-control"  name="categoria" >

                        <?php

                            include 'conexao.php';  

                            $sql = "SELECT * FROM categoria";

                            $buscar = mysqli_query($conexao, $sql);

                            while($array = mysqli_fetch_array($buscar)){

                                $id_categoria = $array['id_categoria'];
                                $nome_categoria = $array['nome'];

                                ?>
                            }

                            <option ><?php echo $nome_categoria ?></option>

                        <?php } ?>

                    </select>

                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control"  name="quantidade" placeholder="insira o quantidade do produto"required>

                </div>

                <div class="form-group" >
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">

                        <?php
                        include 'conexao.php';
                        
                        $sql = "SELECT * FROM fornecedor";
                        $buscar = mysqli_query($conexao, $sql);

                        while($array = mysqli_fetch_array($buscar)){

                            $id_fornecedor = $array['id_fornecedor'];
                            $nome = $array['nome']; 

                        ?>
                        <option ><?php echo $nome ?></option>

                        <?php } ?>

                    </select>

                </div>

                <div style="text-align: right" >
                    <button type="submit" class="btn" id="botao">Success</button>
                </div>
            
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html> 