<?php
	$servidor = "127.0.0.1:3306";
    $usuario = "root";
    $senha = "";
    $dbname = "u691240250_infosavebd";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	?>