<html>
<title>Php com MySql</title>
<body>
<?php

include_once('conexao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sqlinsert = "insert into usuarios (Usuario, Senha)
    values ('$usuario', '$senha')";
    
    $resultado = mysqli_query($conexao, $sqlinsert);
    
    if(!$resultado)
    {
        die('query invalida: ' .mysqli_errno($conexao));
    }
    else
    {
        header('Location: home.html');
    }

    mysqli_close($conexao);
?>
<br><br>
</body>
</html>