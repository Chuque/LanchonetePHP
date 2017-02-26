<?php 
	
	require_once('connectionFactory.php');

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	
	$objBd = new bd();
	$objBd->conecta_mysql();

	$sql = "insert into cliente(cpf, nome, telefone) values('$cpf', '$nome', '$telefone')";

	if(mysql_query($sql))
	{
		header('location:/index.php');
	}
	else
	{
		echo "Erro ao tentar inserir o registro";
	}
?>