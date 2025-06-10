<?php
session_start();

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Usuário e senha pré-definidos
    $usuario_correto = 'admin';
    $senha_correta = '1234';

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        header("Location: inicio.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos!";
    } 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI';
            background: url('img/ia.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        .login-container {
            background-color: rgba(0, 76, 190, 0.95);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
            max-width: 360px;
            width: 100%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 24px;
            color: #333;
            color: white;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container input,
        .login-container button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            font-size: 16px;
        }

        .login-container input {
            border: 1px solid #ccc;
        }

        .login-container button {
            background-color: rgb(25, 51, 135);
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-container button:hover {
            background-color: rgb(21, 41, 108);
        }

        .erro {
            background-color: #ffe0e0;
            color: #d8000c;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            font-size: 14px;
        }

        

        @media (max-width: 400px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="login-container">
            <h2>Bem-vindo de volta</h2>
            <?php if ($erro): ?>
                <div class="erro"><?= $erro ?></div>
            <?php endif; ?>
            <form method="post">
                <input type="text" name="usuario" placeholder="Usuário" required autocomplete="username">
                <input type="password" name="senha" placeholder="Senha" required autocomplete="current-password">
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
