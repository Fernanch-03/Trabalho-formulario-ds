<?php
	//parte da criação do arquivo em html
if(isset($_POST['btn'])){
	$nome = $_POST['nome'];
	$profissao = $_POST['profissao'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$obj = $_POST['obj'];
	$form = $_POST['form'];
	$exp = $_POST['exp'];
	$nasc = $_POST['nasc'];
	$texto = '<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
					<script src="boostrap/js/bootstrap.js" lang="text/javascript"></script>
					<title>Meu curriculo:</title>
				</head>
				<body>
					<div class="container">
						<div class="row">
							<div class="col-12" style="text-align: center; font-size: 45px;">
								MEU CURRICULO
							</div>
							<div class="col-3" id="a">	
								Nome:<p> 
								'.$nome.'<br><br>
								Data de nascimento:<br>
								'.$nasc.'<br><br>
							</div>
							<div class="col-3" id="c">
								Email:<p> 
								'.$email.'<br><br>
								Profissão:<br>
								'.$profissao.'<br><br>
							</div>
							<div class="col-3" id="b">
								Telefone para contato:<p>
								'.$telefone.'<br><br>
								Endereço:<br>
								'.$endereco.'<br><br>
							</div>
							<div class="col-12" >
								Formações profissionais:<p>
								'.$form.'<br><br>

								Experiência profissional<br>
								'.$exp.'<br><br>

								Objetivo de entrar na empresa:<br>
								'.$obj.'<br><br>
								<form>
									<input type="button" value="IMPRIMIR" onClick="window.print()" class="btn" style="margin-right: 10px;"/>
								</form>
							</div>
						</div>
					</div>
					<style type="text/css">
						body{
							background-color: #a9a9a9;
						}
						.col-3,.col-12{
							background-color: #d3d3d3;
							border-radius: 20px;
							margin-bottom: 20px;

						}
						#a{
							margin-right: 94px;
						}
						#b{
							margin-left: 60px;
						}
						#c{
							margin-right: 75px;
							margin-left: 55px;

						}

					</style>
				</body>
				</html>';
	$arquivo = fopen('Formulario.html','a+');
	fwrite($arquivo, $texto);
	fclose($arquivo);
	//parte da conexão no banco de dados
	include('conexao.php');
	$sql = 'INSERT INTO pessoa VALUES(null,"'.$nome.'","'.$nasc.'","'.$profissao.'","'.$email.'","'.$telefone.'","'.$endereco.'","'.$obj.'","'.$form.'","'.$exp.'")';

	$executa = $GLOBALS['con']->query($sql);

	if($executa){
		echo "cadastrado com sucesso";
	}
	else{
		echo "erro ao cadastrar ".$GLOBALS['con']->error;
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Fer</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="boostrap/js/bootstrap.js" lang="ext/javascript"></script>
	</head>
	<body>
		<h1>Registro das Informações</h1>
		<div class="container">	
			<div class="row">
				<div class="col-12">
					<form action="index.php" method="POST">
						<label class="form-label" for="inp-name">Digite seu nome: </label>
						<input type="text" name="nome" required>
						<br>
						<label class="form-label" for="inp-nasc">Digite quando você nasceu:</label>
						<input type="date" name="nasc" required>
						<br>
						<label class="form-label" for="inp-profissao">Digite sua atual profissão</label>
						<input type="text" name="profissao" required >
						<br>
						<label class="form-label" for="inp-email">Digite seu email</label>
						<input type="email" name="email" required>
						<br>
						<label class="form-label" for="inp-telefone">Digite seu telefone</label>
						<input type="text" name="telefone" required>
						<br>
						<label class="form-label" for="inp-endereco">Digite seu endereço</label>
						<input type="text" name="endereco" required>
						<br>
						<label class="form-label" for="inp-obj">Qual seu objetivo de entrar na empresa?</label>
						<input type="text" name="obj" required>
						<br>
						<label class="form-label" for="inp-form">Coloque suas formações em faculdades</label>
						<input type="text" name="form" required>
						<br>
						<label class="form-label" for="inp-exp">Coloque suas experiências profissionais</label>
						<input type="text" name="exp" required>
						<br>
						<button name="btn" class="btn btn-dark btn-lg" id="btn" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
