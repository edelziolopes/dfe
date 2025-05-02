<?php
require_once 'banco.php';
$email = $_POST['txt_email'] ?? '';
$senha = $_POST['txt_senha'] ?? '';
if (loginUsuario($email, $senha)) {
    header('Location: categorias.php');
    exit;
} else {
    header('Location: login.php?erro=1');
    exit;
}
?>
