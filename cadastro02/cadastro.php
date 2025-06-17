<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('../img/ia.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: rgba(0, 76, 190, 0.95);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
            max-width: 360px;
            width: 100%;
            text-align: left;
            color: #fff;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #005ce6;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0041b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Usuário</h2>
        <form method="POST" action="processa_cadastro.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
