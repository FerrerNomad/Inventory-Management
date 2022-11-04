<html>
<title>Php com MySql</title>
<body>
<h3>Novo Produto</h3>
<?php
    include_once('conexao.php');
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];

    //inserindo dados...
    $sqlinsert = "insert into tabelaimg (codigo, produto, descricao, data, imagem, valor)
    values ('$codigo', '$produto', '$descricao', '$data', '$imagem', $valor)";

    $resultado = mysqli_query($conexao, $sqlinsert);
    
    if(!$resultado)
    {
        die('query invalida: ' .mysqli_errno($conexao));
    }
    else
    {
        echo("registro cadastrado com sucesso");
    }
    mysqli_close($conexao);
?>
<br><br>
<input type="button" onclick="window.location='index.html';" value="voltar">
</body>
</html>