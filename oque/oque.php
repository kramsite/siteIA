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
            <p>Uma rede neural é um tipo de inteligência artificial que imita o jeito como o cérebro humano aprende e toma decisões.</p>
            <p>Ela serve para que o computador consiga reconhecer padrões e aprender com exemplos, como identificar rostos, entender falas, traduzir idiomas ou prever comportamentos — sem precisar ser programado passo a passo para cada situação.</p>
            <div class="analogy">
                <strong>Se a inteligência artificial é o objetivo, as redes neurais são como o caminho que ensina a máquina a pensar por si mesma.</strong>
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
            <p>As redes neurais são tão importantes porque elas permitem que as máquinas aprendam sozinhas a partir de exemplos — algo que antes só os humanos conseguiam fazer.</p>
            <h3>Em Outras Palavras</h3>
            <p>Elas são o que tornam possível que sistemas de inteligência artificial:</p>
            <ul>
                <li>Reconheçam rostos e vozes</li>
                <li>Entendam idiomas</li>
                <li>Prevejam comportamentos</li>
                <li>Dirijam carros sozinhos</li>
                <li>Criem textos, imagens ou músicas</li>
            </ul>
       

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