<div class="wrapper ">
  <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="<?php echo base_url('public/assets/img/logo-small.png'); ?>">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="https://www.creative-tim.com" class="simple-text logo-normal">
        DoeMais
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
          <a href="<?= base_url() ?>dashboard">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- Início dos itens acessíveis apenas por administradores -->
        <?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
          <li class="text-center mt-2 mb-2">
            <h6>Administradores</h6>
          </li>
          <li>
            <a href="<?= base_url() ?>usuarios">
              <i class="nc-icon nc-single-02"></i>
              <p>Usuários</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>entidades">
              <i class="nc-icon nc-bank"></i>
              <p>Entidades</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>gerirdoacao/adm_index">
              <i class="nc-icon nc-bank"></i>
              <p>Doações</p>
            </a>
          </li>
          <li class="text-center mt-2 mb-2">
            <h6>Usuários</h6>
          </li>
          <!-- <li class="active-pro">
                        <a href="./upgrade.html">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
          <!-- Fim dos itens acessíveis apenas por administradores -->

        <?php endif; ?>

        <!-- Início dos itens acessíveis apenas pelos demais usuários -->
        <li>
          <a href="<?= base_url() ?>entidadesdoacao">
            <i class="nc-icon nc-bank"></i>
            <p>Fazer Doação</p>
          </a>
        </li>
        <li>
          <a href="<?= base_url() ?>gerirdoacao/usuario_index">
            <i class="nc-icon nc-bank"></i>
            <p>Minhas Doações</p>
          </a>
        </li>
        <!-- Fim dos itens acessíveis apenas pelos demais usuários -->
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="javascript:;">Dashboard - Admin</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <form>
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Pesquisar...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="nc-icon nc-zoom-split"></i>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn-magnify" href="javascript:;">
                <i class="nc-icon nc-layout-11"></i>
                <p>
                  <span class="d-lg-none d-md-block">Stats</span>
                </p>
              </a>
            </li>
            <li class="nav-item btn-rotate dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-bell-55"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item btn-rotate dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-settings-gear-65"></i>
                <p>
                  <span class="d-lg-none d-md-block">Conta</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                <a class="dropdown-item" href="<?= base_url() ?>login/logout">Sair</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->