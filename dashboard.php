<!DOCTYPE html>
<html class="ls-theme-gray">
  <head>
    <title>Laboratório de Openshift com Locaweb STYLE - 21/08/2017</title>

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
        <h1 class="ls-title-intro ls-ico-dashboard">Dasboard</h1>

        <div class="ls-box">
  		<h5 class="ls-title-3">Laboratório de Openshift</h5>
  		<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Consumo de envios</h2>
    <p class="ls-float-right ls-float-none-xs ls-small-info">Quantidade válida até <strong>22/07/2014</strong></p>
  </header>
  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">CONTRATADO</h6>
        </div>
        <div class="ls-box-body">
          <strong>100.000</strong>
          <small>envios por mês</small>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Mudar o Plano de Revenda" class="ls-btn ls-btn-sm" title="Mudar o Plano de Revenda">Mudar de plano</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">DADOS</h6>
        </div>
        <div class="ls-box-body">
          <strong class="ls-ico-bars"></strong>
          <small>Aqui você verifica seus dados</small>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Comprar mais envios" class="ls-btn ls-btn-sm" title="Ver mais">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">DATA</h6>
        </div>
        <div class="ls-box-body">
          <div class="col-xs-6">
            <strong><?php echo date('j');?></strong>
            <small>dia</small>
          </div>
          <div class="col-xs-6">
            <strong><?php echo date('m');?></strong>
            <small>mês</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">HORA</h6>
        </div>
        <div class="ls-box-body">
          <div class="col-xs-6">
            <strong><?php date_default_timezone_set('America/Sao_Paulo'); echo date('g');?></strong>
            <small>hora</small>
          </div>
          <div class="col-xs-6">
            <strong><?php  date_default_timezone_set('America/Sao_Paulo'); echo date('i');?></strong>
            <small>minuto</small>
          </div>
        </div>
      </div>
    </div>

 </div>
</div>
        
      </div>
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
