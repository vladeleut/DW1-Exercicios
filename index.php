<?php
	error_reporting(0);
	$erro=$_GET['erro'];
	if(isset($erro)){
		switch ($erro) {
			case 0:
				echo"<div style='width:99%;height:30px;background:#0099cc;border-radius:10px;border:1px solid blue;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Cadastro efetuado com sucesso!!!</center></div>";
				break;
			case 1:
				echo"<div style='width:99%;height:30px;background:darkred;border-radius:10px;border:1px solid red;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Erro ao fazer o Login. Senha Inválida!</center></div>";
			break;
			case 2:
				echo"<div style='width:99%;height:30px;background:darkred;border-radius:10px;border:1px solid red;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Erro ao fazer o Login. Usuario Inválido!</center></div>";
			break;
            case 3:
                echo"<div style='width:99%;height:30px;background:darkred;border-radius:10px;border:1px solid red;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Erro! Você deve estar Logado para acessar o conteúdo.</center></div>";
            break;
            case 4:
                echo"<div style='width:99%;height:30px;background:darkred;border-radius:10px;border:1px solid red;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Você foi desconectado!</center></div>";
            break;
			default:
				echo"<div style='width:99%;height:30px;background:#123456;border-radius:10px;border:1px solid blue;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Alguma coisa estranha aconteceu!</center></div>";
				break;
		}
	}
?>
<html>
    <head>
        <title>Sistema DW1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                margin: 0 auto;
                padding: 0 auto;
                outline: none;
                font-family: 'calibri';
                font-size: 18px;
            }
            .txt{
                height: 35px ;
                width: 250px ;
                border: none;
                border-radius: 5px;
                background-color: #EEE;      
            }
            #cad_table{
                height: 200px;
                margin: 0 auto;
                padding: 10px;
                border: none;
                margin-top: 200px;              
            }
            #bot_cadas{
                width: 100px;
                height: 30px;
                background-color: #ffffff;
                border-radius: 4px;
                border: 1px solid #ccc;
            }
            label{}
            input{width:420px;height:40px;border-radius:5px;background:#f1f2f6;margin:5px 5px;border:1px solid #aaa;font-size:16px;padding:6px 6px;}
            input[type=submit]{width: 200px;cursor:pointer;background:#999;border:none;}
            input[type=submit]:hover{background:#ccc;}
            fieldset{margin:0 auto;margin-top:20px;width:450px;border-radius: 5px;box-shadow: 1px 2px 6px #ccc;}
            span{float:right;margin-right: 25px;}
            span a{text-decoration:none;font-weight: bold;color:black;}
            span a:hover{text-decoration: underline;}
        </style>
    </head>
<body>
	<div id="cadastro">
	<form method="post" action="validaLog.php">
		<fieldset>
			<legend>Login</legend>
		<label>Usuário:</label><br>
			<input type="text" name="usuario" maxlength="50" required/><br>
	 	<label>Senha:</label><br>
			<input type="password" name="senha" maxlength="50" required/><br>
			<span>Cadastre-se clicando<a href="cadastro.php"> aqui</a></span><br>
	 		<input type="submit" value="Entrar" />
	 	</fieldset>
	</form>