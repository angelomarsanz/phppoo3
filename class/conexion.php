<?php
class Conectar
{
	public static function con()
	{
		$conexion = new mysqli("localhost", "angelomarsanz", "", "mi_blog");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}
}
?>