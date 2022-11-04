<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Sistema de cadastro de produtos</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Alterar Produto</h3>
            <?php

            include_once('conexao.php');
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM tabelaimg where id = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                $dados = mysqli_fetch_array($resultado);
            }
            ?>
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"/>

                <div>
                    <label for="valor">Codigo</label>
                    <input type="text" value="<?php echo $dados['codigo'];?>" name="codigo" id="codigo"/>
                </div>

                <div>
                    <label for="valor">Produto</label>
                    <input type="text" value="<?php echo $dados['produto'];?>" name="produto" id="produto"/>
                </div>

                <div>
                    <label for="valor">Descricao</label>
                    <input type="text" value="<?php echo $dados['descricao'];?>" name="descricao" id="descricao"/>
                </div>


                <div>
                    <label for="valor">Valor</label>
                    <input type="text" value="<?php echo $dados['valor'];?>" name="valor" id="valor"/>
                </div>

                <button type="submit" name="btn-editar" class="btn"> Atualizar</button>
                <a href="consulta.php" class="btn green"> Lista de Produtos </a>
            </form>
        </div>
    </div>


    </div>
    </div>
    </div>
</body>

</html>