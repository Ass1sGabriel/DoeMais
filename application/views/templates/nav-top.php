<!DOCTYPE html>
<html lang="pt-br">

<head>
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

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url() ?>">DoeMais</a>
  <div>
    <form action="<?= base_url() ?>dashboard/pesquisar" method="post">
      <!-- <input class="form-control form-control-dark" type="text" name="busca" id="busca" placeholder="Search" aria-label="Search" value=""> -->
    </form>
  </div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url() ?>login/logout">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>dashboard">
                <span data-feather="shopping-cart"></span>
                Dashboard
          </a>
          <a class="nav-link" href="<?= base_url() ?>entidadesdoacao">
              <span data-feather="shopping-cart"></span>
              Fazer Doação
            </a>
          <!-- Início dos itens acessíveis apenas por administradores -->
            <?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
              <a class="nav-link" href="<?= base_url() ?>usuarios">
                <span data-feather="shopping-cart"></span>
                Usuários
              </a>
              <a class="nav-link" href="<?= base_url() ?>entidades">
                <span data-feather="shopping-cart"></span>
                Entidades
              </a>
            <!-- Fim dos itens acessíveis apenas por administradores -->
            <?php else : ?>
              <!-- Aqui ficariam os itens acessíveis pelos usuários -->
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </nav>