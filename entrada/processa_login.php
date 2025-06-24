<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($senha)) {
        $arquivo = __DIR__ . '/../cadastro/usuarios.txt';

        if (!file_exists($arquivo)) {
            echo "Nenhum usuário cadastrado.";
            exit;
        }

        $usuarios = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $encontrado = false;
        foreach ($usuarios as $linha) {
            $partes = explode('|', $linha);
            if (count($partes) < 2) {
                continue; // ignora linhas mal formatadas
            }
            list($emailSalvo, $senhaHash) = $partes;

            if ($email === $emailSalvo && password ($senha, $senhaHash)) {
                $_SESSION['usuario'] = $email;
                header('Location: entrada.php');
                exit;
            }
        }

        echo "E-mail ou senha incorretos.";
        exit;
    } else {
        echo "Preencha corretamente o e-mail e a senha.";
        exit;
    }
} else {
    echo "Acesso inválido.";
    exit;
}
?>
