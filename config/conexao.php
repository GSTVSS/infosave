<?php
	$servidor = "localhost";
	$usuario = "infosave";
	$senha = "infosave";
	$dbname = "infosave";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	?>