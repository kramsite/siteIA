<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Restrita</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('../img/ia.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .painel {
            background: rgba(0, 76, 190, 0.95);
            padding: 20px 15px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 360px;
            width: 100%;
        }

        .painel h2 {
            margin-bottom: 20px;
            color: white;
        }

        .painel p {
            font-size: 16px;
            color: white;
        }

        .painel a {
            display: inline-block;
            margin-top: 20px;
            background-color: rgb(25, 51, 135);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .painel a:hover {
            background-color: rgb(21, 41, 108);
        }

        
    </style>
</head>
<body>
    <div class="painel">
        <h2>Bem-vindo, <?= $_SESSION['usuario']; ?>!</h2>
        <p>Você está logado com sucesso.</p>
        <a href="entrar.php">Entrar</a>
    </div>
</body>
</html>
