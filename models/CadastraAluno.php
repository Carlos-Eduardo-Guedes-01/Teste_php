<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	require_once '../BD/Conexao.php';
	require_once '../classes/Aluno.php';
	require_once 'classes/';
	$aluno=new Aluno();
	$pessoa=new Pessoa();
	$aluno->setMatricula($POST['matricula']);
	$aluno->setNome_pessoa($POST['nome']);
	$aluno->setCurso($POST['curso']);
	$aluno->setResponsavel($POST['responsavel']);
	$aluno->setSenha($POST['senha']);
	$pessoa->setNome_pessoa($_POST['nome']);
	$pessoa->setDataNascimento($_POST['dataNasc']);
	$sql2=mysqli_query($conn,'insert into pessoa values("[$pessoa->getNome()]","[$pessoa->getDataNascimento()]");');
	$sql=mysqli_query($conn,'insert into aluno values("[$aluno->getMatricula()]","[$aluno->getCurso()]","[$aluno->getResponsavel()]","[$aluno->getSenha()]", NEW.id_pessoa);');
	?>
</body>
</html>