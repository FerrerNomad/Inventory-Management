<meta charset="utf-8">
<?php
session_start();
include_once "conexao.php";

if (!empty($_POST) AND (!empty($_POST['usuario']) OR (!empty($_POST['senha'])))) 
{
    function myAlert($msg, $url)
    {
        echo '<script language="javascript">alert("'.$msg.'");</script>';
        echo "<script>document.location = '$url'</script>";
    }

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "select * from usuarios where usuario ='$usuario'and senha ='$senha'";
    
    $resultado = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($resultado);
    
    if ($linhas == 0) 
    {
        MyAlert("Você não esta cadastrada, sem permissao para realizar isso", "login.html");
    }
     
    else 
    {
        $_SESSION["autenticado"] = "rfc822_allowed";
        $_SESSION["usuario"] = $usuario;
        header("Location: home.html");
    }
}
?>