<?php
include_once('conexao.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de cadastro de produtos</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="row">
            <div class="col s12 m8 push-m2">
                <h3 class="light">Produtos Cadastrados</h3>
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Descricao</th>
                            <th>Imagem</th>
                            <th>Valor</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tabelaimg";
                        $resultado = mysqli_query($conexao, $sql);

                        if(mysqli_num_rows($resultado) > 0)
                        {
                            while($dados = mysqli_fetch_array($resultado))
                            {
                                $id = $dados['id'];

                                if(empty($dados['imagem']))
                                {
                                    $imagem = 'SemImagem.jpeg';
                                }
                                else{
                                    $imagem = $dados['imagem'];
                                }
                                ?>                                
                                <tr>
                                    <td><?php echo $dados['id']; ?></td>
                                    <td><?php echo $dados['codigo']; ?></td>
                                    <td><?php echo $dados['produto']; ?></td>
                                    <td><?php echo $dados['descricao']; ?></td>
                                    <td><?php echo "<a href='verproduto.php?id=$id'><img src='imagem/$imagem' style='width: 80px; heigth: 80px' alt='Indisponivel'></a>" ?></td>
                                    <td><?php echo $dados['valor']; ?></td>
                                    <td><?php echo "<a class='btn-floating btn-large waves-effect waves-light Blue' href='alterar.php?id=$id'>🖊</a>" ?></td>
                                    <td><?php echo "<a class='btn-floating btn-large waves-effect waves-light red' href='excluir.php?id=$id'>❌</a>" ?></td>
                                </tr>  
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <a style="margin-top: 15px;" class="btn btn-info" href="index.html">Cadastrar Produto</a>
            </div>
        </div>
    </body>
</html>