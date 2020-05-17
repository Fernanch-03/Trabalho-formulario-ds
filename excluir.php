<?php
include('conexao.php');

if(isset($_GET['id'])){
	$sql = 'DELETE FROM pessoa WHERE id = '.$_GET['id'];
	$executa = $GLOBALS['con']->query($sql);
		if($executa){
			echo '<script>
				alert("Formulario excluido");
				window.location = "listar.php";
				</script>';
		}else{
			echo 'Erro ao excluir o formulario: '.$GLOBALS['con']->error;
		}
}
?>