<meta charset="utf-8">
<table class="table">
  <thead>
    <tr id="titulos">
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Profissão</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereço</th>
      <th scope="col">Objetivo na empresa</th>
      <th scope="col">Formações em faculdades</th>
      <th scope="col">Experiências profissionais</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
<?php

include('conexao.php');

	$sql2 = 'SELECT * FROM pessoa ORDER BY nome ASC';
	$executa2 = $GLOBALS['con']->query($sql2);

	while($pessoa = $executa2->fetch_array()){
		echo '
    <tr>
      <th scope="row" id = "id">'.$pessoa['id'].'</th>
      <td>'.$pessoa['nome'].'</td>
      <td>'.$pessoa['nascimento'].'</td>
      <td>'.$pessoa['profissao'].'</td>
      <td>'.$pessoa['email'].'</td>
      <td>'.$pessoa['telefone'].'</td>
      <td>'.$pessoa['endereco'].'</td>
      <td>'.$pessoa['objetivo'].'</td>
      <td>'.$pessoa['faculdades'].'</td>
      <td>'.$pessoa['experiencias'].'</td>
      <td>
      	<a href="excluir.php?id='.$pessoa['id'].'">Excluir</a>
      </td>
     </tr> ';


	
	
}
?>
</tbody>
</table>

<style type="text/css">
  th{
    text-align:left;
    background-color: black;
    color: white;
  }
  #id{
    text-align:left;
    background-color: white;
    color: black;
  }
  #titulos{
    text-align:left;
    background-color: black;
    color: white;
  }
</style>