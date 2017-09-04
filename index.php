<?php 
require_once './classes/Logar.class.php';
$Logar = new Logar();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADM APP MARCUS</title>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

    <form name="logar" action="index.php" method="POST" enctype="multipart/form-data">

        <table border="0">
            <thead>
                <tr>
                    <th colspan="5">Use seu login de acesso para acessar o conteúdo restrito</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5">&nbsp;
                    <?php                

                    if (@isset($_POST['logar']) && $_POST['logar'] == 'sim' ){
                        $usuario =  $_POST['usuario'];
                        $senha =  $_POST['senha'];

                        if($Logar->logarUsuario($usuario, $senha)){
                            header('Location:empresas/');                       
                        }else{
                            echo '<div class="msg">Usuário ou senha incorreto. Por favor tente novamente</div>';
                        }
                    }
                    ?>
                    </td>
                </tr>
                <tr>                
                    <td colspan="3">Usuário: </td>
                    <td><input type="text" name="usuario" value="" size="25" class="campo" autocomplete="off" autofocus/></td>
                    <td rowspan="2">
                        <input type="submit" value=">" name="confirmar" class="botao" />
                        <input type="hidden" name="logar" value="sim" />
                    </td>
                </tr>
                <tr>                
                    <td colspan="3">Senha: </td>
                    <td><input type="password" name="senha" value="" size="25" class="campo" autocomplete="off" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>


    </form>

    </body>
</html>

