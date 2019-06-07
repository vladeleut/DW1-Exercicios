<?php
	require_once("conn.php");

	$nome=trim(htmlspecialchars($_POST['nome_ator']));
	$cpf=trim(htmlspecialchars($_POST['cpf_ator']));
	
	$query = mysqli_query(mysqli_connect('localhost','root','admin', 'dw1ex1'),"INSERT INTO ator(nome,cpf) VALUES('$nome','$cpf')")or die(mysql_error());

	
	if($query){
		header("Location:login.php?erro=0");
	} 
	else{
		header("Location:cadastro_novelas.php?erro=1");	
	} 
	

?>