<?php
session_start();

// Verifica se os dados foram enviados
if (!isset($_POST['usuario'], $_POST['senha'])) {
    echo "<script>alert('Preencha todos os campos!'); window.location='index.php';</script>";
    exit;
}

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);
$achou = false;

if (file_exists('usuario.txt')) {
    $linhas = file('usuario.txt', FILE_IGNORE_NEW_LINES);

    foreach ($linhas as $linha) {
        list($usuarioSArquivo, $senhaArquivo) = explode('|', $linha);
        if ($usuarioSArquivo === $usuario && password_verify($senha, $senhaArquivo)) {
            $achou = true;
            $_SESSION['usuario'] = $usuario;
            break;
        }
    }
}

if ($achou) {
    header('Location: dashboard.php');
    exit;
} else {
    echo "<script>alert('Usuário ou senha incorretos!'); window.location='../index/index.php';</script>";
    exit;
}
?>
