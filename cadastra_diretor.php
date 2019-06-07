<?php
session_cache_limiter();
session_cache_expire(1);
session_start();  
include "verifica.php";
?> 

<html>

	<head>
		<title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
	</head>

		<body>
		

		<div id="cadastro_novela">
            <form method="POST" action="tratadadosDiretor.php">
                <fieldset>
                    <legend>Cadastre-se</legend>
                <table id="cad_table_novela">
                    <tr>
                        <td>Nome do Diretor:</td>
                        <td><input type="text" name="nome_dir" id="nome_dir" class="txt" required></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="cpf_dir" id="cpf_dir" class="txt" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Cadastrar Diretor" id="cadastrar"></td>
                    </tr>
                </table>  
                </fieldset>
            </form>
            <br><br>
            <a href="logoff.php"><input type="submit" value="Sair" id="sair"></a>
		</body>

</html>