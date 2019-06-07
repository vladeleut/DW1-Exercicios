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
            <?php
                $link = mysqli_connect("localhost", "root", "admin", "dw1ex1");

                /* check connection */
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                $query = "SELECT nome, ano_lancamento FROM novelas order by nome" or die(mysql_error());

                if ($result = mysqli_query($link, $query)) {
                    echo"<table border='1'>
                        <caption>Novelas Cadastradas</caption>
                        <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Ano de Lançamento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>";
                    /* fetch associative array */
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<td>";echo $row["nome"];echo "</td>"; echo "<td>";echo $row["ano_lancamento"];echo "</td></tr>";
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
            <a href="logoff.php"><input type="submit" value="Sair" id="sair"></a>
		</body>

</html>
