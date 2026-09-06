<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>N.O.V.A.</title>
    <style>
        /* Barra de navegação */
        .nav {
            background-color: #020101; /* Fundo escuro para a barra */
            padding: 7px;              /* Espaçamento interno */
            border-radius: 1px;        /* Bordas arredondadas */
        }

        /* Links da navegação */
        .nav-link {
            color: #4f96a0;            /* Cor do texto */
            background-color: #333333; /* Cor de fundo do botão */
            margin: 0 9px;             /* Separação entre os botões */
            margin-top: 25px;
            border-radius: 4px;
            width: 150px;              /* Largura fixa */
        }

        /* Efeito hover (passar o mouse) */
        .nav-link:hover {
            color: #ffffff;
            background-color: #034a97; /* Fundo azul ao passar o mouse */
        }

        /* Item ativo */
        .nav-link.active {
            color: #4f96a0;
            background-color: #034a97; /* Fundo azul para o item ativo */
        }

        /* Corpo da página */
        body {
            background-color: #333333;
        }

        /* Títulos e textos */
        h1, h4, p {
            color: #e3e3e6;
            font-family: Georgia, serif;
        }

        h1 {
            margin-bottom: 20px;       /* Espaço abaixo do título */
        }

        p {
            line-height: 1.8;          /* Altura da linha para melhor leitura */
            text-align: justify;       /* Texto justificado */
        }

        /* Imagem flutuante */
        .img-flutuante {
            float: left;               /* Faz a imagem flutuar à esquerda */
            margin-right: 20px;        /* Espaço entre imagem e texto */
            margin-bottom: 15px;       /* Espaço abaixo da imagem */
            max-width: 300px;          /* Largura máxima da imagem */
        }
    </style>
</head>
<body>
    <!-- Barra de navegação -->
    <div class="nav d-flex align-items-center">
        <div class="logo">
            <img src="/N.O.V.A/patterns/logo.png" alt="Logo do Site" height="100">
        </div>
        <ul class="nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
    </div>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1>JARVIS: O Braço Robótico Modular</h1>
                
                <!-- Imagem flutuando à esquerda com texto ao redor -->
                <img src="/N.O.V.A/patterns/jarvis.png" alt="JARVIS" class="img-fluid rounded img-flutuante">
                
                <p>
                    JARVIS é um protótipo de braço robótico desenvolvido para laboratórios e criado especialmente para a Arena Tech, a primeira feira de tecnologia de Maringá, organizada pelo colégio CEEP (Centro Estadual de Educação Profissional). O projeto representa um marco na robótica educacional da região, sendo fruto da colaboração de 9 estudantes do colégio Tânia Varella, que uniram conhecimento, criatividade e determinação para trazer à vida uma solução inovadora no campo da automação.
                </p>
                <p>
                    O grande diferencial do JARVIS em relação aos braços robóticos convencionais é sua capacidade de troca rápida da garra, permitindo adaptação para diferentes tarefas e aplicações. O sistema modular oferece as seguintes configurações: garra dupla para manipulação de objetos médios, garra tripla para maior estabilidade em peças irregulares, garra quádrupla para objetos delicados ou de formato complexo, garra fina para precisão em tarefas de montagem e broca acoplável, transformando o braço em uma ferramenta de perfuração. Essa versatilidade torna o JARVIS uma plataforma educacional completa, capaz de simular aplicações industriais reais e ampliar as possibilidades de aprendizado em robótica, automação e engenharia mecânica.
                </p>
                <p>
                    Os jovens desenvolvedores do JARVIS não se limitaram a replicar soluções existentes. Eles realizaram uma integração inteligente de tecnologias já consolidadas, combinando sistema de engrenagens para transmissão de força e precisão nos movimentos, motores servo (servomotores) para controle angular preciso de cada articulação, estrutura em materiais leves e resistentes otimizando o peso sem comprometer a estabilidade e controladora programável permitindo ajustes de movimento e futura integração com sensores. Essa mistura de técnicas demonstra maturidade técnica da equipe, que soube equilibrar conceitos de mecânica, eletrônica e programação para criar um protótipo funcional e escalável.
                </p>
                <p>
                    Para os nove estudantes por trás do JARVIS, o projeto vai além de uma simples demonstração técnica. Ele representa realização pessoal e acadêmica, onde cada membro contribuiu com habilidades únicas desde o design mecânico até a programação do sistema, aprendizado prático com a experiência de desenvolver um projeto do zero enfrentando desafios reais de engenharia e inspiração para o futuro, sendo o JARVIS apenas a primeira versão de uma plataforma que pretende evoluir continuamente. A equipe tem grandes expectativas para as futuras versões do protótipo, com planos ambiciosos que incluem integração de Inteligência Artificial própria para tomada de decisões autônomas e aprendizado de tarefas, comando por voz permitindo controle natural e intuitivo do braço robótico, sensores de ambiente com capacidade de ler o espaço ao redor detectando objetos, cores e distâncias, visão computacional para reconhecimento de padrões e manipulação precisa de objetos e conectividade IoT para integração com outros dispositivos e controle remoto via aplicativo.
                </p>
                <p>
                    O JARVIS não é apenas um protótipo de braço robótico — é um símbolo do potencial da educação técnica e tecnológica no Paraná. Ao participar da Arena Tech, os estudantes do Tânia Varella demonstram que jovens de escolas públicas podem competir em nível de inovação com projetos de instituições privadas, que a robótica educacional é uma ferramenta poderosa para desenvolver pensamento crítico, trabalho em equipe e resolução de problemas e que feiras de ciência e tecnologia como a Arena Tech são essenciais para conectar estudantes, educadores e o setor produtivo. O projeto também serve de inspiração para outros estudantes que desejam seguir carreira em áreas como engenharia, automação, programação e design de produtos.
                </p>
                <p>
                    A equipe do JARVIS acredita que este é apenas o primeiro passo de uma jornada muito maior. Com o feedback recebido na Arena Tech e a experiência acumulada durante o desenvolvimento, os planos incluem parcerias com universidades e empresas para aprimoramento técnico e acesso a novos recursos, participação em outras feiras e competições levando o nome de Maringá e do colégio Tânia Varella para outros palcos, documentação aberta do projeto disponibilizando tutoriais e códigos para que outros estudantes possam replicar e evoluir o JARVIS e criação de uma linha de produtos educacionais transformando o conhecimento adquirido em soluções comerciais para escolas e laboratórios.
                </p>
                <p>
                    O JARVIS é mais do que um braço robótico — é a prova de que inovação, dedicação e trabalho em equipe podem transformar ideias em realidade. Os 9 estudantes do colégio Tânia Varella que deram vida a este projeto não apenas criaram um protótipo funcional, mas também plantaram as sementes para um futuro onde a tecnologia será acessível, modular e inteligente. Com a Arena Tech como palco de lançamento e a comunidade de Maringá como apoiadora, o JARVIS está pronto para evoluir, inspirar e conquistar novos espaços — tanto nos laboratórios quanto na mente de jovens que sonham em construir o amanhã.
                </p>
                <p class="text-center fw-bold">
                    JARVIS – Joint Artificial Robotic Virtual Intelligent System<br>
                    Desenvolvido por estudantes, para o futuro da robótica educacional.
                </p>
                
                <!-- Limpar float no final -->
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</body>
</html>