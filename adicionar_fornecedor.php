<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Fornecedor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        
            <div style="text-align:right">
                <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
            </div>

            <h4>Fornecedor</h4>

            <form action="inserir_fornecedor.php" method="post" style="margin-top: 20px">
            
                <div class="form-group">
                    <label>Nome do fornecedor</label>
                    <input type="text" name="nome" class="form-control" placeholder="Insira o nome do fornecedor" required>

                </div>

                <div style="text-align: right">
                    <button type="submit" class="btn" id="botao">Sucess</button>
                </div>

            </form>


        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>