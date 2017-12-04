<!DOCTYPE html>
<html class="ls-theme-royal-blue">
  <head>
    <title>Laboratório de Openshift com Locaweb STYLE - 26/09/2017</title>

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
        <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>

        <div class="ls-box">
  		<h5 class="ls-title-3">Laboratório de Openshift</h5>
  		<p>Este é um exemplo simples de aplicação sendo executada em Openshift.</p>
        <p>O menu ao lado, possui outros exemplos com páginas dinâmicas.</p>
<?php
	include 'conecta.php';

	// Create connection
	$conn = new mysqli($dbhost, $dbusername, $dbpassword);

	// Check connection
	if ($conn->connect_error) {
    		die("Erro na conexao com o Banco de Dados: " . $conn->connect_error);
		$conn->close();
	} else { 
		$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
		$sql = "SELECT count(id) as total, data FROM visitas order by data desc";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		// output data of each row
	    	while($row = $result->fetch_assoc()) {
        		echo "id: " . $row["total"]. " - Data: " . $row["data"]. "<br>";
	    	}
		} else {
			$sql = "CREATE TABLE visitas (
				id INT(6) AUTO_INCREMENT PRIMARY KEY, 
				data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
				versao VARCHAR(5) NOT NULL
			)";
		}
		$conn->close();
		$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
		$sql = "INSERT INTO visitas (versao) VALUES ('1')";
		if ($conn->query($sql) === TRUE) {
	    		echo "New record created successfully";
		} else {
 	   		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$conn->close();

?>
        </div>
        
      </div>
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
