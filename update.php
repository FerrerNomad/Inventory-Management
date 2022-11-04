<?php
    include_once('conexao.php');
    if(isset($_POST['btn-editar']))
    {
        $codigo = $_POST['codigo'];
        $produto = $_POST['produto'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $id = $_POST['id'];

        $sql = "UPDATE tabelaimg SET codigo = '$codigo', produto = '$produto', descricao = '$descricao',
            valor = '$valor' where id = '$id'";

        if(mysqli_query($conexao, $sql))
        {
            echo("Atualizado com sucesso");
            header('Location: consulta.php');
        }
        else{
            echo("Erro ao atualizar");
            header('Location: consulta.php');
        }
    }
?>