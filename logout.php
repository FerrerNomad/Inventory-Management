<?php

echo "Encerrando a Sessão";
session_start();
session_unset($_SESSION['usuario']);
session_destroy();
header('Location: login.html');
?>