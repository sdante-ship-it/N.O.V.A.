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
            <div class="col-lg-10">
                <form>
                <h1>JARVIS: O Braço Robótico Modular</h1>
                        <div class="mb-3">
                           <select class="form-select" aria-label="Default select example">
                                 <option selected>Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                            </select>
                            </div>
                        <div class="mb-3">
                           <select class="form-select" aria-label="Default select example">
                                 <option selected>Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                            </select>
                            </div>
                            <div class="mb-3">
                           <select class="form-select" aria-label="Default select example">
                                 <option selected>Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                            </select>
                            </div>
                            <div class="mb-3">
                           <select class="form-select" aria-label="Default select example">
                                 <option selected>Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                            </select>
                            </div>
                            <div class="mb-3">
                           <select class="form-select" aria-label="Default select example">
                                 <option selected>Open this select menu</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                            </select>
                            </div>
                            <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                            </div>
                <!-- Limpar float no final -->
                <div style="clear: both;"></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>