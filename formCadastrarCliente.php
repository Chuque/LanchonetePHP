

<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Usuário</title>
</head>

<body>
	<?php
		include_once('menu.php');
	?>
    <form method="post" action="/resources/dao/cadastrarClienteDAO.php" id="formCadastrar">
        Nome:<input type="text" name="nome"><br>
        CPF:<input type="text" name="cpf" maxlength="11"><br>
        Telefone:<input type="text" name="telefone" maxlength="11"><br>
        <input type="submit" value="Cadastrar" name="enviarFormCliente">
    </form>
</body>

</html>