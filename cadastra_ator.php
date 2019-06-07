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
            <form method="POST" action="tratadadosAtor.php">
                <fieldset>
                    <legend>Cadastre-se</legend>
                <table id="cad_table_novela">
                    <tr>
                        <td>Nome do Ator:</td>
                        <td><input type="text" name="nome_ator" id="nome_ator" class="txt" required></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="cpf_ator" id="cpf_ator" class="txt" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Cadastrar Ator" id="cadastrar"></td>
                    </tr>
                </table>  
                </fieldset>
            </form>
			<br><br>
            
            <a href="logoff.php"><input type="submit" value="Sair" id="sair"></a>
		</body>

</html>
