<?php
session_start();
session_destroy();
echo"<script type='text/javascript'>
	 alert('La sesión fué cerrada correctamente');
	window.location='nueva_sesion.php';
	</script>";
?>