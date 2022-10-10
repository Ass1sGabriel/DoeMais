<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('public/assets/favicon.ico'); ?>" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('public/css/style.css'); ?>" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="">DoeMais Tecnologias</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#sobre">Quem Somos?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicos">Nossos serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#app">Mobile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="#parceiros">Parceiros</a></li>
                    <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Nós entregamos exatamente o que você precisa!</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">
                        A plataforma DoeMais possui em um compacto ambiente tudo que sua instituição precisa para gerenciar suas finanças!
                        Construído e pensado para trazer um uso sem dificuldades, a plataforma DoeMais possui inúmeras formas de facilitar
                        o gerenciamento e controle de usuários e doações a serem feitas em sua instituição.</p>
                    <a class="btn btn-primary btn-xl" href="#sobre">Saiba um pouco mais!</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Sobre -->
    <section class="page-section bg-primary" id="sobre">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Tudo em um único lugar!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Começe a trabalhar conosco e veja sua organização crescendo! Com a nossa plataforma em funcionamento
                        você poderá gerir seus colaboradores, seus doadores e controlar valores, entradas e saídas de itens de possíveis doações.</p>
                    <a class="btn btn-light btn-xl" href="#servicos">Quero conhecer!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Serviços -->
    <section class="page-section" id="servicos">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Nossos serviços</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Qualidade</h3>
                        <p class="text-muted mb-0">Sempre atualizado, sem longos downloads e com um suporte excepcional</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Compatibilidade</h3>
                        <p class="text-muted mb-0">Diferente dois iguais, pode ser utilizado de qualquer dispositivo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Conexões</h3>
                        <p class="text-muted mb-0">Você consegue gerir e consultar nosso sistema de qualquer local
                            com internet.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-bag fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Produtos</h3>
                        <p class="text-muted mb-0">Possui a opção de cadastro de produtos, facilitando a vida de quem usa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dispositivos Móveis -->
    <section class="page-section bg-primary text-white" id="app">
        <div class="container px-4 px-lg-5 text-center">

            <h2 class="mb-4">
                Em breve disponível para dispositivos móveis!
            </h2>

            <a class="btn btn-dark btn-xl" href="#">
                <i class="fab fa-android fa-lg"></i>
            </a>

            <a class="btn btn-dark btn-xl" href="#">
                <i class="fab fa-apple fa-lg"></i>
            </a>

        </div>
    </section>
    <!-- Entidades Parceiras -->
    <section class="page-section" id="parceiros">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Entidades Parceiras</h2>
            <p class="text-center mt-0"><small class="text-secondary">**Algumas Entidades parceiras, para ver o total acesse "Ver Mais"</small></p>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <?php foreach ($entidades as $entidade) : ?>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-people fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><?= $entidade["nome"] ?></h3>
                            <p class="text-muted mb-0"><?= $entidade["descricao"] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <a type="button" href="view_pagina_doacoes" class="btn btn-primary btn-md">Ver Mais</a>
    </section>
    <!-- Contato -->
    <section class="page-section bg-primary" id="contato">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Fique por dentro!</h2>
                    <hr class="divider" />
                    <p class="text-light mb-5">Ficou interessado em trabalhar com a nossa plataforma? Preencha seus dados a baixo
                        que entraremos em contato e conversaremos sobre nossos planos disponíveis e indicaremos o melhor para você e sua instituição.
                    </p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contatoForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Nome input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nome completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Seu nome é obrigatório.</div>
                        </div>
                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">E-mail</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Seu email é obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email inválido</div>
                        </div>
                        <!-- Telefone input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(xx) xxxxx-xxxx" data-sb-validations="required" />
                            <label for="phone">Número de telefone</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Seu telefone é obrigatório</div>
                        </div>
                        <!-- Menssagem input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Descreva seus principais interesses</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">O assunto é obrigatório.</div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Formulário enviado com sucesso!</div>
                            </div>
                        </div>

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Erro ao enviar formulário!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-light btn-xl disabled" id="submitButton" type="submit">Enviar</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-1 mb-3"></i>
                    <div class="text-light">(32) 3721-0190</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - DoeMais Tecnologias</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>