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
            color: #4f96a0;
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
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                <form action="salvar_feedback.php" method="post">
                <h1 class="h3">JARVIS: O Braço Robótico Modular</h1>
                <h4 class="text-body-secondary fw-normal mb-4">Deixe seu feedback sobre o protótipo</h4>

                        <!-- P1: impressão geral -->
                        <div class="mb-3">
                           <label for="impressao" class="form-label">Qual sua impressão geral sobre o JARVIS?</label>
                           <select class="form-select" id="impressao" name="impressao" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="excelente">Excelente</option>
                                 <option value="bom">Bom</option>
                                 <option value="regular">Regular</option>
                                 <option value="ruim">Precisa melhorar</option>
                            </select>
                            </div>

                        <!-- P2: recurso que mais chamou atenção -->
                        <div class="mb-3">
                           <label for="recurso_destaque" class="form-label">Qual recurso mais chamou sua atenção?</label>
                           <select class="form-select" id="recurso_destaque" name="recurso_destaque" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="troca_garra">Troca rápida de garra</option>
                                 <option value="modularidade">Sistema modular</option>
                                 <option value="movimentos">Precisão dos movimentos</option>
                                 <option value="design">Design e estrutura</option>
                                 <option value="controladora">Controladora programável</option>
                            </select>
                            </div>

                            <!-- P3: clareza da demonstração -->
                            <div class="mb-3">
                           <label for="clareza" class="form-label">A demonstração do funcionamento foi clara?</label>
                           <select class="form-select" id="clareza" name="clareza" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="muito_clara">Muito clara</option>
                                 <option value="clara">Clara</option>
                                 <option value="confusa">Um pouco confusa</option>
                                 <option value="nao_entendi">Não entendi bem</option>
                            </select>
                            </div>

                            <!-- P4: recurso futuro de maior interesse -->
                            <div class="mb-3">
                           <label for="futuro" class="form-label">Qual funcionalidade futura mais te interessa?</label>
                           <select class="form-select" id="futuro" name="futuro" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="ia">Inteligência Artificial própria</option>
                                 <option value="comando_voz">Comando por voz</option>
                                 <option value="sensores">Sensores de ambiente</option>
                                 <option value="visao">Visão computacional</option>
                                 <option value="iot">Conectividade IoT</option>
                            </select>
                            </div>

                            <!-- P5: recomendaria o projeto -->
                            <div class="mb-3">
                           <label for="recomendaria" class="form-label">Você recomendaria o JARVIS para outras feiras de tecnologia?</label>
                           <select class="form-select" id="recomendaria" name="recomendaria" required>
                                 <option value="" selected disabled>Selecione uma opção</option>
                                 <option value="sim">Sim, com certeza</option>
                                 <option value="talvez">Talvez</option>
                                 <option value="nao">Não</option>
                            </select>
                            </div>

                            <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Deixe seu comentário aqui" id="comentario" name="comentario" style="height: 100px"></textarea>
                            <label for="comentario">Comentários (opcional)</label>
                            </div>

                            <button type="submit" class="btn btn-primary mb-4">Enviar feedback</button>

                <!-- Limpar float no final -->
                <div style="clear: both;"></div>
                </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>