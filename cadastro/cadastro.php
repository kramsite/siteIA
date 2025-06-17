<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
     <style>
         body {
            font-family: 'Segoe UI';
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
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-top: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #005ce6;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0041b3;
        }

        

        
    </style>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="processar.php" method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>E-mail: <input type="email" name="email" required></label><br><br>
        <label>Data de Nascimento: <input type="date" name="data_nascimento" required></label><br><br>
        <label>Sexo:
            <select name="sexo" required>
                <option value="">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </label><br><br>
        <label>Senha: <input type="password" name="senha" required></label><br><br>
        <form action="processar_cadastro.php" method="POST">
    <!-- campos do formulário aqui -->
    <button type="submit">Cadastrar</button>
</form>

    </form>
</body>
</html>


<?php
// Função para limpar e proteger os dados recebidos
function limparEntrada($dado) {
    return htmlspecialchars(trim($dado), ENT_QUOTES, 'UTF-8');
}

// Recebendo e limpando os dados do formulário
$nome = limparEntrada($_POST['nome'] ?? '');
$email = limparEntrada($_POST['email'] ?? '');
$data_nascimento = limparEntrada($_POST['data_nascimento'] ?? '');
$sexo = limparEntrada($_POST['sexo'] ?? '');
$senha = $_POST['senha'] ?? ''; // Não mostramos nem limpamos a senha por segurança

// Verificação se todos os campos foram preenchidos
if (empty($nome) || empty($email) || empty($data_nascimento) || empty($sexo) || empty($senha)) {
    echo "Por favor, preencha todos os campos!";
    exit;
}

// Validação do e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido!";
    exit;
}

// (Opcional) Validação simples da data de nascimento
if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $data_nascimento)) {
    echo "Data de nascimento inválida! Use o formato AAAA-MM-DD.";
    exit;
}

// Criptografando a senha (se for armazenar depois)
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Exibindo os dados (exceto a senha)
echo "<h2>Dados Cadastrados:</h2>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
echo "<p><strong>Sexo:</strong> $sexo</p>";

header('Location: index.php');
exit;

?>

