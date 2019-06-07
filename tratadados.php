<?php
	require_once("conn.php");

	$nome=trim(htmlspecialchars($_POST['nome']));
	$email=trim(htmlspecialchars($_POST['email']));
	$usuario=trim(htmlspecialchars($_POST['usuario']));
	$senha=trim(htmlspecialchars(md5($_POST['senha'])));

	$query = mysqli_query(mysqli_connect('localhost','root','admin', 'dw1ex1'),"INSERT INTO usuarios(nome,email,usuario,senha) VALUES('$nome','$email','$usuario','$senha')")or die(mysql_error());

	if($query){
	header("Location:index.php?erro=0");
	} 
	else{
	header("Location:cadastro.php?erro=1");	
	} 
	

?>