<?php
    error_reporting(0);
    $erro=$_GET['erro'];
    if(isset($erro)){
        switch ($erro) {
            case 0:
                echo"<div style='width:99%;height:30px;background:#0099cc;border-radius:10px;border:1px solid blue;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Cadastro efetuado com sucesso!!!</center></div>";
                break;
            case 1:
                echo"<div style='width:99%;height:30px;background:darkred;border-radius:10px;border:1px solid red;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Erro ao fazer o cadastro</center></div>";
            break;
            default:
                echo"<div style='width:99%;height:30px;background:#123456;border-radius:10px;border:1px solid blue;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Alguma coisa estranha aconteceu!</center></div>";
                break;
        }
    }
?>
<html>
    <head>
        <title>SISTEMA DE ENSINO</title>
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
                width: 400px ;
                border: none;
                border-radius: 5px;
                background-color: #EEE;      
            }
            #cad_table{
                width: 400px;
                height: 200px;
                margin: 0 auto;
                padding: 10px;
                border: none;             
            }
            #bot_cadas{
                width: 100px;
                height: 30px;
                background-color: #ffffff;
                border-radius: 4px;
                border: 1px solid #ccc;
            }
            fieldset{margin:0 auto;margin-top:20px;padding:0 auto; width:400px;border-radius: 5px;box-shadow: 1px 2px 6px #ccc;}
            input[type=submit]{margin-top:3px;cursor:pointer;}
            input[type=submit]:hover{box-shadow: 1px 1px 5px #000;}
            input{padding: 5px 5px;font-size: 16px;width:400px;}
            span{float:right;margin-right: 5px;}
            span a{text-decoration:none;font-weight: bold;color:black;}
            span a:hover{text-decoration: underline;}
        </style>
    </head>
    <body>
        <div id="cadastro">
            <form method="POST" action="tratadados.php">
                <fieldset>
                    <legend>Cadastre-se</legend>
                <table id="cad_table">
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" id="nome" class="txt" required></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" name="email" id="nome" class="txt" required></td>
                    </tr>
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" name="usuario" id="nome" class="txt" required></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" id="nome" class="txt" required></td>
                    </tr>
                    <tr>
                        <td colspan=2><span>Já possui cadastro? Faça o login clicando <a href="login.php" >aqui</a></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="cadastrar" id="bot_cadas"></td>
                    </tr>
                </table>  
                </fieldset>
            </form>
            
        </div>
    </body>
</html>




