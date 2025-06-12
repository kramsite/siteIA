<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvendando as Redes Neurais na Inteligência Artificial</title>
    <link rel="stylesheet" href="oque.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="../estrutura/estrutura.php">Estrutura</a></li>
            <li><a href="../tipos/tipos.php">Tipos</a></li>
            <li><a href="causas.php">Causas</a></li>
            <li><a href="acoes.php">Ações</a></li>
         </ul>
        </nav>
    </header>

    <div class="container">
            <h1>Desvendando as Redes Neurais na Inteligência Artificial</h1>
            <p>Compreenda como essas "células cerebrais digitais" permitem que as máquinas aprendam e tomem decisões inteligentes.</p>
            <div class="php-info">
                <?php
                    // Define o fuso horário para Cuiabá, Mato Grosso, Brasil
                    date_default_timezone_set('America/Cuiaba');
                    
                    $hora_atual = date('H'); // Pega a hora atual (0 a 23)
                    $cumprimento = "Olá!";

                    if ($hora_atual >= 6 && $hora_atual < 12) {
                        $cumprimento = "Bom dia!";
                    } elseif ($hora_atual >= 12 && $hora_atual < 18) {
                        $cumprimento = "Boa tarde!";
                    } else {
                        $cumprimento = "Boa noite!";
                    }

                    echo "<p>".$cumprimento." Agora são " . date('H:i') . " de " . date('d/m/Y') . ".</p>";
                ?>
            </div>

        <section>
            <h2>O que é Redes Neurais?</h2>
            <p>
                Dentro do campo da IA, existem várias formas de tentar alcançar essa "inteligência". Uma das formas mais poderosas e fascinantes são as Redes Neurais Artificiais (RNAs).
            </p>
            <p>
                Elas são um tipo de modelo de computação que foi inspirado na forma como o nosso próprio cérebro funciona. Nosso cérebro tem bilhões de células chamadas "neurônios" que se conectam e trocam informações para que possamos pensar, aprender e agir. As Redes Neurais tentam simular isso no computador.
            </p>
            <div class="analogy">
                <strong>Se a IA é o "sonho", as Redes Neurais são como um dos "ingredientes secretos" para fazer esse sonho virar realidade.</strong>
            </div>
        </section>

        <section>
            <h2>Como Uma Rede Neural Funciona?</h2>
            <p>
                Imagine uma Rede Neural como uma série de "camadas" de trabalhadores, cada um com uma função específica:
            </p>

            <h3>1. Camada de Entrada: Os "Olhos e Ouvidos" da Máquina</h3>
            <ul>
                <li>É a primeira camada, por onde as informações entram na rede.</li>
                <li>Pense nela como os seus sentidos: ela recebe os dados (imagens, sons, números, textos).</li>
                <li>Cada pedacinho de informação é como um "neurônio" nessa camada.</li>
                <li>Exemplo: Se a rede vai reconhecer um gato, a entrada podem ser os pixels da imagem do gato.</li>
            </ul>

            <h3>2. Camadas Ocultas: O "Cérebro Pensante" da Máquina</h3>
            <ul>
                <li>Entre a entrada e a saída, existem uma ou mais "camadas ocultas" (ou de processamento).</li>
                <li>Aqui, os neurônios recebem os dados da camada anterior, fazem cálculos complexos e passam a informação adiante.</li>
                <li>Eles aprendem a identificar padrões, características e relações nos dados.</li>
                <li>Cada conexão entre os neurônios tem um "peso" (um número) que indica a importância daquela informação. Esses pesos são o que a rede "aprende" a ajustar.</li>
                <li>Exemplo: Um neurônio pode aprender a detectar "bigodes de gato", outro "orelhas pontudas", outro "pelo fofo".</li>
            </ul>

            <h3>3. Camada de Saída: A "Resposta" da Máquina</h3>
            <ul>
                <li>É a última camada, que apresenta o resultado final do processamento.</li>
                <li>Pode ser uma decisão, uma classificação, uma previsão ou um texto gerado.</li>
                <li>Exemplo: A rede pode dizer: "Isso é 95% um Gato!" ou "O preço da casa será R$ 500.000".</li>
            </ul>

            <div class="highlight">
                <p>
                    O segredo é que, durante o treinamento, a rede neural "aprende" ajustando esses "pesos" nas conexões. Ela recebe muitos exemplos com as respostas certas, erra, e então se corrige, tornando-se cada vez mais precisa, como uma criança aprendendo a andar de bicicleta.
                </p>
            </div>
        </section>

        <section>
            <h2>Por Que as Redes Neurais São Tão Importantes na IA?</h2>
            <ul>
                <li>Aprendizado: Elas conseguem aprender com os dados sem serem programadas passo a passo para cada tarefa.</li>
                <li>Reconhecimento de Padrões: São excelentes em encontrar padrões complexos em grandes volumes de dados (imagens, voz, texto).</li>
                <li>Adaptação: Podem se adaptar e melhorar seu desempenho à medida que recebem mais dados e experiência.</li>
                <li>Lidar com Dados Incompletos/Barulhentos: Conseguem extrair informações úteis mesmo de dados que não são perfeitos.</li>
            </ul>
        </section>

        <section>
            <h2>Onde Vemos Redes Neurais no Dia a Dia?</h2>
            <p>As Redes Neurais estão por trás de muitas tecnologias que usamos constantemente, como:</p>
            <ul>
                <li>Reconhecimento Facial: Desbloqueio de celular, organização de fotos.</li>
                <li>Assistentes de Voz (Siri, Alexa): Entendem o que você fala e respondem.</li>
                <li>Carros Autônomos: Ajudam o carro a "ver" a estrada, pedestres e outros veículos.</li>
                <li>Sistemas de Recomendação: Sugestões de filmes (Netflix), músicas (Spotify), produtos (Amazon).</li>
                <li>Tradução Automática: Google Tradutor.</li>
                <li>Detecção de Fraudes: Em bancos e transações online.</li>
            </ul>
            <div class="analogy">
                <strong>As Redes Neurais são os "músculos" que fazem muitos dos "superpoderes" da IA funcionarem.</strong>
            </div>
        </section>

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