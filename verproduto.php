    <html>

    <head>
        <meta charset="utf-8">
        <title>Sistema de cadastro de produtos</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body>
        <div class="container">

            <h5 style="margin-top: 90px;" class="center">Consulta Geral - Detalhes do produto</h5>
            <?php

            function ConverteData($data)
            {
                $data_vetor = explode('-', $data);
                $novadata = implode('/', array_reverse($data_vetor));
                return $novadata;
            }

            include_once('conexao.php');

            if (isset($_GET['id']))
                $id = $_GET['id'];
            else
                header('Location: consulta.php');

            $sql = "SELECT * FROM tabelaimg where id = $id";
            $resultado = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_array($resultado);

            echo "<table border='0px'><tr><td width='250px'>";
            if (empty($dados['imagem'])) {
                $imagem = 'SemImagem.jpeg';
            } else {
                $imagem = $dados['imagem'];
            }
            echo "<img style='width: 400px; heigth: 250px;' src='imagem/$imagem'>";
            echo "</td>";

            echo "<td width='400px'>";
            echo "<b>Data: </b>" . ConverteData($dados['data']) ."<br>";
            echo "<b>Id: </b>" . $dados['id'] . "<br>";
            echo "<b>Código: </b>" . $dados['codigo'] . "<br>";
            echo "<b>Produto: </b>" . $dados['produto'] . "<br>";
            echo "<b>Descrição: </b>" . $dados['descricao'] . "<br>";
            echo "<b>Valor: </b> R$" . $dados['valor'] . "<br>";
            echo "</td></tr></table>";

            mysqli_close($conexao);
            ?>
            <div class="center">
                <a href="consulta.php" class="btn">Lista de produtos</a>
            </div>
        </div>
    </body>

    </html