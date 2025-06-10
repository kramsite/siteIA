<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede Neural Simplificada: Decisão do Tomate (Variável)</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #eef4f7;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            color: #333;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 2.2em;
            text-align: center;
        }
        .input-form {
            background-color: #ffffff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: flex-end;
            justify-content: center;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .input-form label {
            font-weight: bold;
            color: #555;
            margin-bottom: 8px;
            font-size: 1.1em;
        }
        .input-form input[type="number"] {
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 100px;
            font-size: 1.1em;
            text-align: center;
            transition: border-color 0.3s;
        }
        .input-form input[type="number"]:focus {
            border-color: #3498db;
            outline: none;
        }
        .input-form button {
            padding: 12px 25px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s;
        }
        .input-form button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        /* Estilos da rede neural */
        .network-container {
            display: flex;
            gap: 50px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            align-items: flex-start;
            margin-top: 20px;
        }
        .layer {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
            min-width: 150px;
        }
        .layer-title {
            font-size: 1.4em;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 15px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 8px;
            text-align: center;
            width: 100%;
        }
        .neuron {
            width: 120px;
            height: 120px;
            background-color: #2ecc71;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1em;
            border: 3px solid #27ae60;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 5px;
            box-sizing: border-box;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .neuron:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .neuron-label {
            font-size: 0.9em;
            margin-bottom: 3px;
            opacity: 0.8;
        }
        .neuron-value {
            font-size: 1.2em;
            letter-spacing: 0.5px;
        }
        .input-neuron {
            background-color: #3498db;
            border-color: #2980b9;
        }
        .output-neuron {
            background-color: #e67e22;
            border-color: #d35400;
        }
        .explanation {
            margin-top: 40px;
            max-width: 900px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            line-height: 1.7;
            font-size: 1.1em;
            text-align: justify;
        }
        .explanation h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 1.8em;
            border-bottom: 2px solid #bdc3c7;
            padding-bottom: 10px;
        }
        .explanation p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h1>Rede Neural Simplificada: A Máquina Que Reage!</h1>


    <form class="input-form" method="GET" action="">
        <div class="input-group">
            <label for="cor_vermelha">Cor (0=verde, 1=vermelho):</label>
            <input type="number" step="0.01" min="0" max="1" name="cor_vermelha" id="cor_vermelha"
                   value="<?php echo isset($_GET['cor_vermelha']) ? htmlspecialchars($_GET['cor_vermelha']) : '0.9'; ?>">
        </div>
        <div class="input-group">
            <label for="firmeza">Firmeza (0=mole, 1=duro):</label>
            <input type="number" step="0.01" min="0" max="1" name="firmeza" id="firmeza"
                   value="<?php echo isset($_GET['firmeza']) ? htmlspecialchars($_GET['firmeza']) : '0.2'; ?>">
        </div>
        <button type="submit">Analisar Tomate</button>
    </form>

    <div class="network-container">

        <?php
        // --- Recebe os valores do formulário ---
        $cor_vermelha = isset($_GET['cor_vermelha']) ? floatval($_GET['cor_vermelha']) : 0.9;
        $firmeza = isset($_GET['firmeza']) ? floatval($_GET['firmeza']) : 0.2;

        // --- CAMADA DE ENTRADA (Características do Tomate) ---
        echo '<div class="layer">';
        echo '<div class="layer-title">1. Características</div>';
        echo '<div class="neuron input-neuron"><span class="neuron-label">Cor (Vermelho)</span><span class="neuron-value">' . number_format($cor_vermelha, 2) . '</span></div>';
        echo '<div class="neuron input-neuron"><span class="neuron-label">Firmeza</span><span class="neuron-value">' . number_format($firmeza, 2) . '</span></div>';
        echo '</div>'; // Fim da Camada de Entrada

        // --- CAMADA DE PROCESSAMENTO (Análise Interna) ---
        // A máquina faz seus cálculos COM AS ENTRADAS, e eles AFETAM a saída final!
        // Ajustei um pouco os "pesos" e o "limiar" para que as mudanças fiquem mais visíveis.
        $chance_maduro_cor = $cor_vermelha * 0.8;   // Cor vermelha tem um peso maior
        $chance_maduro_firmeza = (1 - $firmeza) * 0.7; // Moleza (inverso da firmeza) também tem um peso significativo

        // A máquina combina as duas "chances" para ter uma ideia geral
        $pensamento_interno = ($chance_maduro_cor + $chance_maduro_firmeza) / 2;
        // Adicionamos uma "função de ativação" simples para simular como neurônios "disparam"
        // Aqui, um sigmoid simplificado para manter o valor entre 0 e 1, tornando a decisão mais clara
        $pensamento_interno_ativado = 1 / (1 + exp(-($pensamento_interno * 5 - 2.5))); // Amplifica a variação para decisão

        echo '<div class="layer">';
        echo '<div class="layer-title">2. Pensamento Interno</div>';
        echo '<div class="neuron"><span class="neuron-label">Análise da Cor</span><span class="neuron-value">' . number_format($chance_maduro_cor, 2) . '</span></div>';
        echo '<div class="neuron"><span class="neuron-label">Análise da Firmeza</span><span class="neuron-value">' . number_format($chance_maduro_firmeza, 2) . '</span></div>';
        echo '<div class="neuron"><span class="neuron-label">Resultado Combinado</span><span class="neuron-value">' . number_format($pensamento_interno_ativado, 2) . '</span></div>';
        echo '</div>'; // Fim da Camada de Processamento

        // --- CAMADA DE SAÍDA (A Decisão Que Varia) ---
        // A máquina tem uma "regra final": se o resultado combinado for maior que um limiar, ela diz "Maduro!"
        // Ajustei o limiar para reagir melhor aos novos pesos.
        $limiar_maduro = 0.5; // Agora o ponto de corte é 0.5 após a "ativação"

        $decisao = ($pensamento_interno_ativado > $limiar_maduro) ? "Sim, Maduro!" : "Não, Ainda Verde."; 

        echo '<div class="layer">';
        echo '<div class="layer-title">3. Decisão Final</div>';
        echo '<div class="neuron output-neuron"><span class="neuron-label">Opinião da Máquina</span><span class="neuron-value">' . $decisao . '</span></div>';
        echo '</div>'; // Fim da Camada de Saída
        ?>

    </div>

    <div class="explanation">
        <h2>Como a Máquina "Decidiu" Este Tomate:</h2>
        
        <ul>
            <li>Na "1. Características", ela pegou os números da cor e firmeza que você digitou.</li>
            <li>Na "2. Pensamento Interno", ela fez cálculos com esses números, usando "regras" (pesos) que agora são mais efetivas para diferenciar. Ela também aplicou uma "ativação" para clarear o resultado.</li>
            <li>Na "3. Decisão Final", a máquina comparou o "resultado combinado" com um valor de corte. Se o resultado foi alto o suficiente (indicando mais características de maduro), ela disse "Sim, Maduro!". Caso contrário, disse "Não, Ainda Verde.".</li>
        </ul>
        <p>
            Este exemplo se aproxima mais de como uma rede neural "funciona" na prática (a parte de "propagar para frente"), onde as entradas influenciam diretamente a saída através dos cálculos em cada camada. A diferença para uma rede neural de verdade é que as "regras" (pesos e a função de ativação) seriam **aprendidas automaticamente** através de muitos exemplos, em vez de serem fixadas no código.
        </p>
    </div>

</body>
</html>