<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v3.8.6">
  <title><?= $title ?></title>

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
  <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">

  <meta name="theme-color" content="#563d7c">

</head>

<body class="text-center">

  <form class="form-signin" method="post" action="<?= base_url() ?>login/store">

    <img class="mb-4 rounded-circle" src="<?php echo base_url('public/assets/logo.png'); ?>" alt="" width="122" height="122">

    <h1 class="h3 mb-3 font-weight-normal">Faça seu login</h1>

    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" id="inputEmail" class="form-control mb-2" placeholder="Email" required autofocus>

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>

    <div class="checkbox mb-3">
      <?= $this->session->flashdata('usuario_inativo'); ?>
      <?= $this->session->flashdata('usuario_incorreto'); ?>
      <?= $this->session->flashdata('erro_login'); ?>
      <label>
        <input type="checkbox" value="remember-me"> Lembrar meu acesso
      </label>
    </div>

    <p>
      <a href="<?= base_url() ?>cadastrar">Não tem uma conta?</a>
    </p>

    <button class="btn btn-primary btn-block" type="submit">Logar</button>
    <p class="mt-5 mb-3 text-muted">&copy; DoeMais - 2022</p>

  </form>
</body>

</html>