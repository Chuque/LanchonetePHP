<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">

</head>
<body>
	<div class="main-page">
	    <div class="menu-container">
		    <?php 
		    	include_once('menu.php');
		     ?>

	    </div>

	    <div style="height: 70%; width: 100%;">
			<div style="float: left; width: 50%;">
				<a href="formExibirClientes.php" style="text-align: center; text-decoration: none;"><h3 style="color: white;">Exibir Clientes</h3></a>
			</div>
			<div style="float: right; width: 50%;">
				<a href="formCadastrarCliente.php" style="text-align: center; text-decoration: none;"><h3 style="color: white;">Cadastrar Clientes</h3></a>
			</div>
		</div>
    </div>
</body>
</html>