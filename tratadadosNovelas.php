<?php
	require_once("conn.php");

	$nome=trim(htmlspecialchars($_POST['nome_novela']));
	$ano_lan=trim(htmlspecialchars($_POST['ano_lan']));
	
	$query = mysqli_query(mysqli_connect('localhost','root','admin', 'dw1ex1'),"INSERT INTO novelas(nome,ano_lancamento) VALUES('$nome','$ano_lan')")or die(mysql_error());

	
	if($query){
		header("Location:login.php?erro=0");
	} 
	else{
	header("Location:cadastro_novelas.php?erro=1");	
	} 
	

?>