<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tipos de Redes Neurais</title>
    <link rel="stylesheet" href="tipos.css">
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
        <h1>Tipos de Redes Neurais</h1>

        <section>
        <?php
        // Dados das redes neurais, com texto simplificado, exemplos práticos e link interativo
        $redes_neurais = [
            [
                'titulo' => 'Perceptron Multicamadas (MLP)',
                'intro' => 'A **MLP** é a rede neural mais simples, com camadas de neurônios que se conectam em sequência.',
                'detalhes' => [
                    'Como funciona' => 'Ela recebe dados, processa em camadas "escondidas" e entrega um resultado. Ela aprende ajustando a importância das conexões (pesos) para acertar as respostas.',
                    'Para que serve' => 'Ótima para tarefas diretas como **classificar e-mails** (spam ou não), **prever preços** ou encontrar padrões em números. É um bom começo para a IA.',
                    'Exemplo Prático' => 'Imagine um sistema que decide se um **e-mail é spam ou não**. A MLP analisa palavras, remetente e estrutura do e-mail. Ela aprende que certas palavras ou padrões geralmente indicam spam e, com base nisso, classifica o e-mail como "spam" ou "não spam".'
                ],
                'link_interativo' => [
                    'texto' => 'Experimente o TensorFlow Playground',
                    'url' => 'https://playground.tensorflow.org/'
                ]
            ],
            [
                'titulo' => 'Redes Convolucionais (CNN)',
                'intro' => 'As **CNNs** são especialistas em "ver". Elas trabalham com imagens e vídeos, imitando como nossos olhos funcionam.',
                'detalhes' => [
                    'Como funciona' => 'Usam "filtros" para achar partes importantes na imagem (bordas, texturas). Depois, juntam essas partes para reconhecer objetos completos.',
                    'Para que serve' => 'Essenciais para **reconhecimento facial**, **carros autônomos**, **diagnóstico médico por imagem** (achar problemas em exames) e filtros de fotos.',
                    'Exemplo Prático' => 'Pense em um **carro autônomo**. Uma CNN consegue identificar em tempo real se a imagem da câmera mostra um pedestre, um sinal de "pare" ou outro veículo, diferenciando-os com base nas características visuais que ela aprendeu a reconhecer.'
                ],
                'link_interativo' => [
                    'texto' => 'Explore o CNN Explainer interativo',
                    'url' => 'https://poloclub.github.io/cnn-explainer/'
                ]
            ],
            [
                'titulo' => 'Redes Recorrentes (RNN)',
                'intro' => 'As **RNNs** têm "memória". São perfeitas para dados em sequência, como texto ou áudio, pois lembram do que veio antes.',
                'detalhes' => [
                    'Como funciona' => 'Ao processar uma sequência (tipo uma frase), ela usa o que já leu para entender o contexto do que está lendo agora, como se tivesse um histórico.',
                    'Para que serve' => 'Ideais para **previsão de séries do tempo** (bolsa, clima), **reconhecimento de voz** e **geração de música**, onde a ordem é vital.',
                    'Exemplo Prático' => 'Num **reconhecimento de voz**, a RNN ouve as palavras uma a uma. Para entender a frase "Eu _amo_ chocolate", ela usa o que ouviu antes ("Eu amo") para prever ou confirmar que a próxima palavra fará sentido no contexto, mesmo com sotaques ou ruídos.'
                ],
                'link_interativo' => [
                    'texto' => 'Gere texto no estilo Shakespeare com uma RNN',
                    'url' => 'https://trekhleb.dev/machine-learning-experiments/#/experiments/text_generation_shakespeare_rnn'
                ]
            ],
            [
                'titulo' => 'LSTM e GRU',
                'intro' => '**LSTM** e **GRU** são versões mais espertas das RNNs. Elas foram criadas para lembrar de informações importantes por mais tempo, superando o "esquecimento" das RNNs básicas.',
                'detalhes' => [
                    'Como funciona' => 'Têm "portões" que controlam o fluxo de informação, decidindo o que guardar e o que descartar. Isso as ajuda a entender dependências de longo prazo nos dados.',
                    'Para que serve' => 'Muito usadas em **tradução automática**, **geração de texto** (escrever artigos) e em **assistentes virtuais** que precisam acompanhar a conversa.',
                    'Exemplo Prático' => 'Na **tradução automática**, uma LSTM consegue traduzir frases complexas como "O menino que morava na casa amarela, no topo da colina, perto do rio, foi pescar". Ela lembra do "menino" mesmo com todas as informações adicionais, conectando o sujeito ao verbo corretamente na tradução.'
                ],
                'link_interativo' => [
                    'texto' => 'Experimente o Google Tradutor (usa LSTMs/Transformers)',
                    'url' => 'https://translate.google.com/'
                ]
            ],
            [
                'titulo' => 'Transformers',
                'intro' => '**Transformers** são os modelos mais recentes e poderosos para texto. Eles mudaram como a IA entende e cria linguagem, sendo a base de sistemas como o ChatGPT.',
                'detalhes' => [
                    'Como funciona' => 'O segredo é a "atenção": eles olham para todas as palavras de uma vez e veem quais são mais importantes para entender o sentido. É como focar nas partes certas da frase simultaneamente.',
                    'Para que serve' => 'Preferidos para **tradução de alta qualidade**, **resumos automáticos**, **geração de texto criativo** e **sistemas de perguntas e respostas**.',
                    'Exemplo Prático' => 'Quando você pergunta ao **ChatGPT** algo como "Quem é o autor de \'Dom Casmurro\'?", o Transformer não apenas entende a pergunta, mas também gera uma resposta coesa e relevante, usando seu conhecimento sobre o livro e o autor, considerando todas as palavras da pergunta ao mesmo tempo.'
                ],
                'link_interativo' => [
                    'texto' => 'Converse com o ChatGPT',
                    'url' => 'https://chatgpt.com/'
                ]
            ],
            [
                'titulo' => 'Autoencoders',
                'intro' => '**Autoencoders** são redes que aprendem a "copiar" sua própria entrada para a saída. A inteligência está no meio do processo.',
                'detalhes' => [
                    'Como funciona' => 'Têm um "codificador" que compacta a informação e um "decodificador" que a reconstrói. Assim, eles aprendem o essencial dos dados.',
                    'Para que serve' => 'Excelentes para **comprimir dados**, **remover ruídos** (em fotos ou áudios), **simplificar dados complexos** e **detectar coisas incomuns** (anomalias).',
                    'Exemplo Prático' => 'Pense em **restaurar fotos antigas e com ruído**. Um Autoencoder pode ser treinado com fotos limpas e fotos com ruído. Ele aprende a "descompactar" a foto com ruído, removendo as imperfeições e gerando uma versão mais limpa, como se estivesse filtrando o ruído automaticamente.'
                ],
                'link_interativo' => [
                    'texto' => 'Interaja com um Autoencoder para entender a compressão',
                    'url' => 'https://www.donnybertucci.com/project/interactive-autoencoder'
                ]
            ]
        ];

        // Loop para exibir cada tipo de rede neural
        foreach ($redes_neurais as $rede) {
            echo '<div class="highlight">';
            echo '<h3 onclick="toggleDetails(this)">' . $rede['titulo'] . '</h3>';
            
            echo '<div class="description-details">';
            echo '<p>' . $rede['intro'] . '</p>';
            foreach ($rede['detalhes'] as $subtitulo => $texto) {
                $class = ($subtitulo === 'Exemplo Prático') ? ' example-practical' : '';
                echo '<p class="'. $class .'"><strong>' . $subtitulo . ':</strong> ' . $texto . '</p>';
            }

            // Novo: Botão/link para o exemplo interativo real
            if (isset($rede['link_interativo']) && !empty($rede['link_interativo']['url'])) {
                echo '<div class="interactive-example-section">';
                echo '<a href="' . $rede['link_interativo']['url'] . '" target="_blank" class="interactive-button">';
                echo $rede['link_interativo']['texto']; // Usa o texto configurado no array
                echo '</a>';
                echo '</div>';
            }

            echo '</div>'; // Fecha description-details
            echo '</div>'; // Fecha highlight
        }
        ?>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <p>© 2025 Grupo 1. Desenvolvido para fins educacionais</p>
        </div>
    </footer>

    <script>
        // Função JavaScript para mostrar/esconder os detalhes
        function toggleDetails(element) {
            const details = element.nextElementSibling;
            
            if (details.style.display === 'none' || details.style.display === '') {
                details.style.display = 'block'; // Mostra o conteúdo
            } else {
                details.style.display = 'none'; // Esconde o conteúdo
            }
        }
    </script>
</body>
</html>