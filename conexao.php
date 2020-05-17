<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "usbw";
	$banco = "formulario";
	$con = new mysqli($servidor, $usuario, $senha, $banco);
	if(!$con){
		echo "Erro de conexão! ".$con->error;
	}

?>