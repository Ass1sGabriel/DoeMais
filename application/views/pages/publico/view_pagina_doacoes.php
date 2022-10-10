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
    <!-- Entidades para Doar -->
    <section class="page-section" id="parceiros">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Entidades Parceiras</h2>
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