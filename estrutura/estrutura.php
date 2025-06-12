<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estrutura.css">
</head>
<body>
    
    <header>
        <nav>
        <ul>
        <li><a href="../oque/oque.php">O que é?</a></li>
        <li><a href="../tipos/tipos.php">Tipos</a></li>
        <li><a href="causas.php">Causas</a></li>
        <li><a href="acoes.php">Ações</a></li>
        </ul>
        </nav>
    </header>

    <div class="container">
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
    </div>

    <div class="container">
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
            //         // A máquina tem uma "regra final": se o resultado combinado for maior que um limiar, ela diz "Maduro!"
            // Ajustei o limiar para reagir melhor aos novos pesos.
            $limiar_maduro = 0.5; // Agora o ponto de corte é 0.5 após a "ativação"
  
            $decisao = ($pensamento_interno_ativado > $limiar_maduro) ? "Sim, Maduro!" : "Não, Ainda Verde."; 

            echo '<div class="layer">';
            echo '<div class="layer-title">3. Decisão Final</div>';
            echo '<div class="neuron output-neuron"><span class="neuron-label">Opinião da Máquina</span><span class="neuron-value">' . $decisao . '</span></div>';
            echo '</div>'; // Fim da Camada de Saída//
            //   ?>    
        </div>
    </div>


    <div class="container">    
        <div class="explanation">
            <h2>Como a Máquina "Decidiu" Este Tomate:</h2>
        
            <ul>
                <li>Na "1. Características", ela pegou os números da cor e firmeza que você digitou.</li>
                <li>Na "2. Pensamento Interno", ela fez cálculos com esses números, usando "regras" (pesos) que agora são mais efetivas para diferenciar. Ela também aplicou uma "ativação" para clarear o resultado.</li>
                <li>Na "3. Decisão Final", a máquina comparou o "resultado combinado" com um valor de corte. Se o resultado foi alto o suficiente (indicando mais características de maduro), ela disse "Sim, Maduro!". Caso contrário, disse "Não, Ainda Verde.".</li>
            </ul>
            <p> Este exemplo se aproxima mais de como uma rede neural "funciona" na prática (a parte de "propagar para frente"), onde as entradas influenciam diretamente a saída através dos cálculos em cada camada. A diferença para uma rede neural de verdade é que as "regras" (pesos e a função de ativação) seriam **aprendidas automaticamente** através de muitos exemplos, em vez de serem fixadas no código.</p>
        </div>
    </div>

    <footer>
        <div class="footer-content">
          <p>© 2025 Grupo 1. Desenvolvido para fins educacionais</p>
        </div>
    </footer>

    <script>
  let lastScrollTop = 0;
  const header = document.querySelector("header");

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
      // Rolando para baixo → esconde
      header.classList.add("hidden");
    } else {
      // Rolando para cima → mostra
      header.classList.remove("hidden");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Evita valores negativos
  });
</script>


</body>
</html>