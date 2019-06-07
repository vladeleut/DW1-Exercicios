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
            <br><br>
            <?php
                $link = mysqli_connect("localhost", "root", "admin", "dw1ex1");

                /* check connection */
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                $query = "SELECT nome, cpf FROM diretor order by nome";

                if ($result = mysqli_query($link, $query)) {
                    echo"<table class='blueTable'>
                        <caption>Diretores Cadastrados</caption>
                        <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>";
                    /* fetch associative array */
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<td>";echo $row["nome"];echo "</td>"; echo "<td>";echo $row["cpf"];echo "</td></tr>";
                    }
                    echo "</tr>
                            </tbody>
                        </table>";
                        /* free result set */
                        mysqli_free_result($result);
                }
                /* close connection */
                mysqli_close($link);
            ?>
            <br><br><a href="logoff.php"><input type="submit" value="Sair" id="sair"></a><br>
            <a href="login.php"><input type="submit" value="Voltar" id="sair">
		</body>

</html>
