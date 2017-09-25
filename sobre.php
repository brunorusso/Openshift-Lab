<!DOCTYPE html>
<html class="ls-theme-dark-green">
  <head>
    <title>Laboratório de Openshift com Locaweb STYLE</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
  </head>
  <body>
    <div class="ls-topbar ">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
        <span class="ls-name">Usuário</span>
        (johnkennedy)
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  
  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="index.php" class="ls-ico-earth">
        <small>Laboratório</small>
        Openshift by Locaweb CORP
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>


    <aside class="ls-sidebar">
      <nav class="ls-menu">
        <ul>
           <li><a href="dashboard.php" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
           <li><a href="sobre.php" class="ls-ico-info" title="Sobre">Sobre</a></li>
       </ul>
      </nav>
  </div>
</aside>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-info">Sobre</h1>

        <div class="ls-box">
  		<h5 class="ls-title-3">Laboratório de Openshift</h5>
  		<div class="ls-box ls-board-box">

          <div class="ls-alert-danger"><strong>Informações sobre o POD!</strong><br>
            <?php
            echo 'Informações sobre o POD: ';
            echo $_SERVER['SERVER_SOFTWARE'];
            echo '<br>';
            echo 'IP do POD: ';
            echo $_SERVER['SERVER_ADDR'];
            echo '<br>';
            echo 'Versão Atual do PHP: ' . phpversion();
            ?>  
          </div>

        
      </div>
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
