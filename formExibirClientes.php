<?php
        require_once('resources/dao/readClienteDAO.php');

        $clienteDao = new ClienteDAO();
        $clientes = $clienteDao->selectAll();
        
?>

<!DOCTYPE html>
<html>

<head>
    <title>Clientes</title>
</head>

<body>
	<?php
		include_once('menu.php');
	?>
    <div>
        <table border="1">
            <?php 

                for($i=1;$i<=count($clientes);$i++)
                {
                    echo "<tr>";
                    
                        echo "<td>".$clientes[$i][1]."</td>";
                        echo "<td>".$clientes[$i][2]."</td>";
                        echo "<td>".$clientes[$i][3]."</td>";
                    
                    echo "</tr>";
                }
             ?>
        </table>
    </div>
</body>

</html>