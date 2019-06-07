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
	

		<div id="cadastra_novela">
            <form method="POST" action="tratadadosNovelas.php">
                <fieldset>
                    <legend>Cadastre-se</legend>
                <table id="cad_table_novela">
                    <tr>
                        <td>Nome da Novela:</td>
                        <td><input type="text" name="nome_novela" id="nome_novela" class="txt" required></td>
                    </tr>
                    <tr>
                        <td>Ano da Novela:</td>
                        <td><input type="text" name="ano_lan" id="ano_lan" class="txt" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Cadastrar Novela" id="cadastrar"></td>
                    </tr>
                </table>  
                
                </fieldset>
            </form>
			<br><br>
            <a href="logoff.php"><input type="submit" value="Sair" id="sair"></a>
		</body>

</html>