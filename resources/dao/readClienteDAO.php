<?php 
	
	class ClienteDAO
	{
		function __construct()
		{
			require_once('connectionFactory.php');
		}
		
		function selectAll()
		{

			$sql = "select cpf, nome, telefone from cliente";

			$objBd = new bd();
			$objBd->conecta_mysql();

			$resultado = mysql_query($sql);

			if($resultado)
			{
				/*
				$dados_cliente = mysql_fetch_array($resultado);

				if(empty($dados_cliente))
				{
					return null;
				}
				else
				{
					return $dados_cliente;
				}
				*/

				$i = 1;
				while($row = mysql_fetch_array($resultado))
				{
					$dados_cliente[$i] = array(1 => $row['cpf'], 2 => $row['nome'], 3 => $row['telefone']);
					$i = $i+1;
				}

				return $dados_cliente;
			}

		}	
	}
	
	

 ?>