<?php
	require_once("conn.php");

	$nome=trim(htmlspecialchars($_POST['nome_dir']));
	$cpf=trim(htmlspecialchars($_POST['cpf_dir']));
	
	$query = mysqli_query(mysqli_connect('localhost','root','admin', 'dw1ex1'),"INSERT INTO diretor(nome,cpf) VALUES('$nome','$cpf')")or die(mysql_error());

	if($query){
	header("Location:login.php?erro=0");
	} 
	else{
	header("Location:cadastro_novelas.php?erro=1");	
	} 
	

?>