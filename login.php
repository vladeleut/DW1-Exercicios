<?php
session_cache_limiter();
session_cache_expire(1);
session_start();  
include "verifica.php";
?> 

<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

        <body>
            <h1>Seja bem vindo!!! <?php echo $_SESSION["LOGIN_USUARIO"]; ?></h1>

            <a href="cadastro_novela.php" ><input type="submit" value="Cadastrar Novela" id="cadastrar_novela"></a>
            <a href="ver_novelas.php" ><input type="submit" value="Novelas Cadastradas" id="ver_novela"></a>
            <br>
            <a href="cadastra_diretor.php" ><input type="submit" value="Cadastrar Diretor" id="cadastrar_diretor">
            </a>
            <a href="ver_diretor.php" ><input type="submit" value="Diretores Cadastrados" id="ver_diretor"></a>
            <br>
            <a href="cadastra_ator.php" ><input type="submit" value="Cadastrar Ator" id="cadastrar_ator"></a>
            <a href="ver_ator.php" ><input type="submit" value="Atores Cadastrados" id="ver_ator"></a>
            <br>
            <br><br>
            <a href="logoff.php"><input type="submit" value="Sair"></a>
        </body>

</html>
