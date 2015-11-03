<?php
header('Content-Type: text/html; charset=UTF-8'); 

require_once 'class/class_login.php'; 
$blog = new blog();
if (isset($_POST['grabar']) and $_POST['grabar']=='si')
{
	$blog->nueva_sesion();
}else{
 
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registro de usuarios</title>
    </head>
    <body>
        <form name="form" action="" method="post">
        <table style="width:400px; height:120px; background:#FFCC00">
            <tr>
                <td>
                   Nombre de usuario 
                </td>
                <td>
                   <input type="text" name="nom"> 
                </td>
            </tr>
               <tr><input type="hidden" name="grabar" value="si">
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr><?php
				if(isset($_GET['usuario']))
				{
				?>
			<tr>
				<td colspan="2" style="background:#f00; color:#fff; text-align:center">
				<?php
					switch($_GET['usuario'])
					{
						case 'no_existe':
						?>
							Los datos introducidos no existen
						<?php
					}
				}
				?>
				</td>
			</tr>
               <tr>
                <td>         
                </td>
                <td>
                   <input type="submit" value="Inicia sesión"> 
                </td>
            </tr>
        </table>
      </form>
    </body>
</html>