<?php
header('Content-Type: text/html; charset=UTF-8'); 

require_once("class/class_login.php");
if(!isset($_SESSION["nick"]))
{
?>
Debe iniciar session para acceder a este contenido
<a href='nueva_sesion.php'>Página principal</a>";
<?php
}else{
?>
<h2>Bienvenido de nuevo <?php echo $_SESSION['nick']?></h2>
<a href="cerrar_sesion.php">Cerrar sesión</a>
<?php
}
?>