<?php

    include 'conexao.php';

    $id = $_GET['id'];
?>
    <!DOCTYPE html>
    <html lang="pt">
        <head>
            <meta charset="utf-8">
            <title>Formulário de cadastro</title>
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
                <h4>Formulario de cadastro</h4>
                <form  action="atualizar_produto.php" method="post" style="margin-top: 20px">
                    <?php
                    
                        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
                        $buscar = mysqli_query($conexao, $sql);
                        while($array = mysqli_fetch_array($buscar)) {

                            $id_estoque = $array['id_estoque'];
                            $nroproduto = $array['nroproduto'];
                            $nomeproduto = $array['nomeproduto'];
                            $quantidade = $array['quantidade'];
                            $categoria = $array['categoria'];
                            $fornecedor = $array['fornecedor'];

                    ?>

                    <div class="form-group">
                        <label>Nro Produto</label>
                        <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto?>" disabled>
                        <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display:none">

                    </div>

                    <div class="form-group">
                        <label>Nome do produto</label>
                        <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">

                    </div>

                    <div class="form-group">
                        <label>Categoria</label> 
                        <select class="form-control"  name="categoria">
                            <option >Periféricos</option>
                            <option >Hatdware</option>
                            <option >Software</option>
                            <option >Celulares</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" class="form-control"  name="quantidade" value="<?php echo $quantidade ?>">

                    </div>

                    <div class="form-group" >
                        <label>Fornecedor</label>
                        <select class="form-control" name="fornecedor">
                            <option >Fornecedor A</option>
                            <option >Fornecedor B</option>
                            <option >Fornecedor C</option>
                        </select>

                    </div>

                    <div style="text-align: right" >
                    <button type="submit" class="btn" id="botao">Ataulizar</button>
                    </div>
                <?php } ?>
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
    </html> 
